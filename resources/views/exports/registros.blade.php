<table>
    <thead>
        <tr>
            <th>Fecha</th>
            <th>Nombre</th>
            <th>Dependencia</th>
            <th>Tipo de visita</th>
            <th>Municipio</th>
            <th>Evento</th>
            <th>Registró</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($registros as $r)
            <tr>
                <td>{{ $r->created_at?->format('d/m/Y H:i') }}</td>
                <td>{{ $r->nombre }}</td>
                <td>{{ $r->dependencia->nombre ?? '—' }}</td>
                <td>{{ $r->tipoVisita->nombre ?? '—' }}</td>
                <td>{{ $r->municipio->nombre ?? '—' }}</td>
                <td>
                    @if ($r->para_evento == 0)
                        —
                    @elseif ($r->num_personas > 0)
                        Sí ({{ $r->num_personas }} acomp.)
                    @else
                        Sí
                    @endif
                </td>
                <td>{{ $r->user->name ?? '—' }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
