<?php

namespace App\Http\Controllers;

use App\Models\Municipio;
use App\Models\Dependencia;
use App\Models\TiposVisita;
use App\Models\Registro;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

use App\Exports\RegistrosExport;
use Maatwebsite\Excel\Facades\Excel;

class RegistroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $municipios   = Municipio::orderBy('nombre')->get();
        $dependencias = Dependencia::orderBy('nombre')->get();
        $tipoVisitas  = TiposVisita::orderBy('nombre')->get();

        $registros = collect(); // vacío por defecto

        if ($request->filled('fecha_inicial') || $request->filled('fecha_final')) {
            $request->validate([
                'fecha_inicial' => 'nullable|date',
                'fecha_final'   => 'nullable|date|after_or_equal:fecha_inicial',
            ]);

            $inicio = $request->filled('fecha_inicial') ? Carbon::parse($request->fecha_inicial)->startOfDay() : Carbon::minValue();
            $fin    = $request->filled('fecha_final')   ? Carbon::parse($request->fecha_final)->endOfDay()   : Carbon::now()->endOfDay();

            $query = Registro::with(['dependencia', 'tipoVisita', 'municipio', 'user'])
                ->whereBetween('created_at', [$inicio, $fin]);

            if ($request->filled('municipio_id'))   $query->where('municipio_id',   $request->municipio_id);
            if ($request->filled('dependencia_id')) $query->where('dependencia_id', $request->dependencia_id);
            if ($request->filled('tipo_visita_id')) $query->where('tipo_visita_id', $request->tipo_visita_id);

            $registros = $query->latest()->paginate(20)->withQueryString();
        }

        return view('consulta', compact('municipios', 'dependencias', 'tipoVisitas', 'registros'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $municipios = Municipio::orderBy('nombre')->get();
        $dependencias = Dependencia::orderBy('nombre')->get();
        $tipoVisitas = TiposVisita::orderBy('nombre')->get();

        return view('registro', compact('municipios', 'dependencias', 'tipoVisitas'));
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validamos los datos
        $validated = $request->validate([
            'para_evento'     => 'nullable|boolean',
            'num_personas'    => 'nullable|integer|min:0|max:50',
            'nombre' => 'required|string|max:255',
            'a_quien_visita' => 'nullable|string|max:255',
            'asunto' => 'nullable|string|max:255',
            'dependencia_id' => 'nullable|integer|exists:dependencias,id',
            'tipo_visita_id' => 'required|integer|exists:tipos_visita,id',
            'municipio_id' => 'nullable|integer|exists:municipios,id',
            'gafet' => 'nullable|string|max:255',
        ]);

        $paraEvento = $request->boolean('para_evento'); 
        $numPersonas = $paraEvento
            ? (int) $request->input('num_personas', 0)
            : 0;

        $validated['para_evento']  = $paraEvento ? 1 : 0;
        $validated['num_personas'] = $numPersonas;

        $validated['user_id'] = Auth::id();

        // Guardamos el registro
        // Registro::create($validated);
        
        try {
            Registro::create($validated);
        } catch (\Exception $e) {
            dd('Error al insertar en BD: ' . $e->getMessage());
        }

        // Redirigimos con mensaje
        return redirect()->route('registro.create')->with('success', 'Registro guardado correctamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function exportExcel(Request $request)
{
    /** Repetimos la misma consulta que index(), pero obteniendo colección */
    $query = Registro::with(['dependencia', 'tipoVisita', 'municipio', 'user']);

    if ($request->filled('municipio_id')) {
        $query->where('municipio_id', $request->municipio_id);
    }
    if ($request->filled('dependencia_id')) {
        $query->where('dependencia_id', $request->dependencia_id);
    }
    if ($request->filled('tipo_visita_id')) {
        $query->where('tipo_visita_id', $request->tipo_visita_id);
    }
    if ($request->filled('fecha_inicial') || $request->filled('fecha_final')) {
        $inicio = $request->filled('fecha_inicial')
            ? \Carbon\Carbon::parse($request->fecha_inicial)->startOfDay()
            : \Carbon\Carbon::minValue();

        $fin = $request->filled('fecha_final')
            ? \Carbon\Carbon::parse($request->fecha_final)->endOfDay()
            : \Carbon\Carbon::now()->endOfDay();

        $query->whereBetween('created_at', [$inicio, $fin]);
    }

    $registros = $query->get(); // colección

    return Excel::download(
        new RegistrosExport($registros),
        'consultas.xlsx'
    );
}
}
