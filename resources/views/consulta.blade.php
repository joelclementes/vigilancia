<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Consultas
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-5 lg:p-5 bg-white border-b border-gray-200">
                    <div class="flex items-center">

                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="size-5 text-vino-900">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M21 21l-4.35-4.35m0 0A7.5 7.5 0 104.5 4.5a7.5 7.5 0 0012.15 12.15z" />
                        </svg>


                        <h2 class="ms-3 text-xl font-semibold text-gray-900">
                            {{ now()->format('d/m/Y') }}
                        </h2>
                    </div>
                    <h1 class="mt-8 text-2xl font-medium text-gray-900">
                        Datos para la consulta
                    </h1>

                </div>

                <div class="bg-gray-200 bg-opacity-25 overflow-hidden sm:rounded-lg p-5">

                    <form method="GET" action="{{ route('registro.consulta') }}">

                        <div class="flex space-x-4">
                            <div class="mt-4 basis-1/2 ">
                                <x-label for="fecha_inicial" value="Fecha inicial" />
                                <x-input id="fecha_inicial"
                                    class="w-full border-vino-900 focus:border-vino-900 focus:ring-vino-900"
                                    type="date" name="fecha_inicial" required autofocus tabindex="1" />
                            </div>

                            <div class="mt-4 basis-1/2 ">
                                <x-label for="fecha_final" value="Fecha final" />
                                <x-input id="fecha_final"
                                    class="w-full border-vino-900 focus:border-vino-900 focus:ring-vino-900"
                                    type="date" name="fecha_final" tabindex="2" required autofocus />
                            </div>

                            <div class="mt-4 basis-full">
                                <x-label for="municipio_id" value="Municipio" />
                                <select id="municipio_id" name="municipio_id"
                                    class="w-full border-vino-900 focus:border-vino-900 focus:ring-vino-900 rounded-md shadow-sm"
                                    tabindex="3">
                                    <option value="" selected>Todos</option>
                                    @foreach ($municipios as $municipio)
                                        <option value="{{ $municipio->id }}">{{ $municipio->nombre }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="mt-4 basis-full">
                                <x-label for="dependencia_id" value="Dependencia" />
                                <select id="dependencia_id" name="dependencia_id"
                                    class="w-full border-vino-900 focus:border-vino-900 focus:ring-vino-900 rounded-md shadow-sm"
                                    tabindex="4">
                                    <option value="" selected>Todas</option>
                                    @foreach ($dependencias as $dependencia)
                                        <option value="{{ $dependencia->id }}">{{ $dependencia->nombre }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="flex space-x-4">
                            <div class="mt-4 basis-full">
                                <x-label for="nombre" value="Por nombre" />
                                <x-input id="nombre"
                                    class="w-full border-vino-900 focus:border-vino-900 focus:ring-vino-900"
                                    type="text" name="nombre" autofocus tabindex="5" />
                            </div>

                            <div class="mt-4 basis-full">
                                <x-label for="tipo_visita_id" value="Tipo de visita" />
                                <select id="tipo_visita_id" name="tipo_visita_id"
                                    class="w-full border-vino-900 focus:border-vino-900 focus:ring-vino-900 rounded-md shadow-sm"
                                    tabindex="6">
                                    <option value="" selected>Todos</option>
                                    @foreach ($tipoVisitas as $tipoVisita)
                                        <option value="{{ $tipoVisita->id }}">{{ $tipoVisita->nombre }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="mt-4 basis-full">
                                <x-label for="area_id" value="Área" />
                                <select id="area_id" name="area_id"
                                    class="w-full border-vino-900 focus:border-vino-900 focus:ring-vino-900 rounded-md shadow-sm"
                                    tabindex="7">
                                    <option value="" selected>Todos</option>
                                    @foreach ($areas as $area)
                                        <option value="{{ $area->id }}">{{ $area->nombre }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="mt-4 basis-full">
                                <x-label for="diputado_id" value="Diputado" />
                                <select id="diputado_id" name="diputado_id"
                                    class="w-full border-vino-900 focus:border-vino-900 focus:ring-vino-900 rounded-md shadow-sm"
                                    tabindex="8">
                                    <option value="" selected>Todos</option>
                                    @foreach ($diputados as $diputado)
                                        <option value="{{ $diputado->id }}">{{ $diputado->nombre }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <button type="submit" class="mt-4 bg-green-600 hover:bg-green-700 text-white py-2 px-4 rounded-md"
                            tabindex="9">Consultar</button>
                    </form>
                </div>

                <div class="bg-gray-200 bg-opacity-25 overflow-hidden sm:rounded-lg p-5">
                    <div class="flex justify-end mb-4">
                        <a href="{{ route('registro.export', request()->query()) }}"
                            class="bg-gray-600 hover:bg-gray-700 text-white px-4 py-2 rounded-md flex items-center">

                            {{-- Ícono Excel --}}
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 24 24"
                                fill="currentColor">
                                <path
                                    d="M19 2H8C6.895 2 6 2.895 6 4V6H4C2.895 6 2 6.895 2 8V20C2 21.105 2.895 22 4 22H16C17.105 22 18 21.105 18 20V18H19C20.105 18 21 17.105 21 16V4C21 2.895 20.105 2 19 2ZM16 20H4V8H16V20ZM19 16H18V6H8V4H19V16Z" />
                            </svg>

                            Exportar Excel
                        </a>
                    </div>
                    <table id="tabla-consultas" class="min-w-full mt-6">
                        <thead>
                            <tr class="text-left">
                                <th class="py-2 text-xs">Fecha</th>
                                <th class="py-2 text-xs">Nombre</th>
                                <th class="py-2 text-xs">Municipio</th>
                                <th class="py-2 text-xs">Dependencia</th>
                                <th class="py-2 text-xs">Tipo de visita</th>
                                <th class="py-2 text-xs">Evento</th>
                                <th class="py-2 text-xs">Área que visita</th>
                                <th class="py-2 text-xs">Dip. que visita</th>
                                <th class="py-2 text-xs">Registró</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($registros as $r)
                                <tr class="border-t">
                                    <td class="py-2 text-xs">{{ $r->created_at?->format('d/m/Y H:i') }}</td>
                                    <td class="py-2 text-xs">{{ $r->nombre }} {{ $r->apellido_paterno }} {{ $r->apellido_materno }}</td>
                                    <td class="py-2 text-xs">{{ $r->municipio->nombre ?? '—' }}</td>
                                    <td class="py-2 text-xs">{{ $r->dependencia->nombre ?? '—' }}</td>
                                    <td class="py-2 text-xs">{{ $r->tipoVisita->nombre ?? '—' }}</td>
                                    <td class="py-2 text-xs"> @php
                                        if ($r->para_evento == 0) {
                                            $texto = '—';
                                        } elseif ($r->num_personas > 0) {
                                            $texto = 'Sí (' . $r->num_personas . ' acomp.)';
                                        } else {
                                            $texto = 'Sí';
                                        }
                                    @endphp

                                        {{ $texto }}</td>
                                    <td class="py-2 text-xs">{{ $r->area->nombre ?? '—' }}</td>
                                    <td class="py-2 text-xs">{{ $r->diputado->nombre ?? '—' }}</td>
                                    <td class="py-2  text-xs">{{ $r->user->name ?? '—' }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        {{-- DataTables (CDN) --}}
        @push('styles')
            <link rel="stylesheet" href="https://cdn.datatables.net/1.13.8/css/jquery.dataTables.min.css">
        @endpush

        @push('scripts')
            <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
            <script src="https://cdn.datatables.net/1.13.8/js/jquery.dataTables.min.js"></script>
            <script>
                document.addEventListener('DOMContentLoaded', function() {
                    const hoy = new Date().toISOString().split('T')[0];
                    document.getElementById('fecha_inicial').value = hoy;
                    document.getElementById('fecha_final').value = hoy;
                });

                $(function() {
                    $('#tabla-consultas').DataTable({
                        responsive: true,
                        pageLength: 10,
                        language: {
                            url: 'https://cdn.datatables.net/plug-ins/1.13.8/i18n/es-MX.json'
                        }
                    });
                });
            </script>
        @endpush

</x-app-layout>
