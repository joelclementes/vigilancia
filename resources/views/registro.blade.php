<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Registro
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
                                d="M8 2v2M16 2v2M3 8h18M5 10h14v10a2 2 0 01-2 2H7a2 2 0 01-2-2V10zM8 14h.01M12 14h.01M16 14h.01M8 18h.01M12 18h.01M16 18h.01" />
                        </svg>
                        <h2 class="ms-3 text-xl font-semibold text-gray-900">
                            {{ now()->format('d/m/Y') }}
                        </h2>
                    </div>
                    <h1 class="mt-8 text-2xl font-medium text-gray-900">
                        Datos del visitante
                    </h1>

                </div>

                <div class="bg-gray-200 bg-opacity-25 overflow-hidden sm:rounded-lg p-5">

                    <form method="POST" action="{{ route('registro.store') }}">
                        @csrf

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            {{-- Columna izquierda --}}
                            <div class="space-y-4">

                                <div class="mt-4">
                                    <div class="flex items-center space-x-4">

                                        {{-- Checkbox + etiqueta --}}
                                        <div class="flex items-center space-x-2">
                                            <x-label for="para_evento" value="Se registra para evento" />
                                            <input type="checkbox" id="para_evento" name="para_evento" value="1">
                                        </div>

                                        {{-- Input del número de personas --}}
                                        <div class="flex items-center space-x-2 flex-1">
                                            <x-label for="num_personas" value="Acompañantes" />
                                            <x-input id="num_personas"
                                                class="w-full border-vino-900 focus:border-vino-900 focus:ring-vino-900"
                                                type="number" name="num_personas" min="1" max="50"
                                                placeholder="Ej: 3" />
                                        </div>

                                    </div>
                                </div>

                                <div class="mt-4 grid grid-cols-1 md:grid-cols-3 gap-4">
                                    <div>
                                        <x-label class="text-red-600" for="nombre" value="Nombre(s) *" />
                                        <x-input id="nombre"
                                            class="w-full border-vino-900 focus:border-vino-900 focus:ring-vino-900"
                                            type="text" name="nombre" required autofocus />
                                    </div>
                                    <div>
                                        <x-label for="apellido_paterno" value="Ap. Paterno" />
                                        <x-input id="apellido_paterno"
                                            class="w-full border-vino-900 focus:border-vino-900 focus:ring-vino-900"
                                            type="text" name="apellido_paterno" autofocus />
                                    </div>

                                    <div>
                                        <x-label for="apellido_materno" value="Ap. Materno" />
                                        <x-input id="apellido_materno"
                                            class="w-full border-vino-900 focus:border-vino-900 focus:ring-vino-900"
                                            type="text" name="apellido_materno" autofocus />
                                    </div>
                                </div>
                                <div class="mt-4">
                                    <x-label for="a_quien_visita" value="A quien visita" />
                                    <x-input id="a_quien_visita"
                                        class="w-full border-vino-900 focus:border-vino-900 focus:ring-vino-900"
                                        type="text" name="a_quien_visita" autofocus />
                                </div>

                                <div class="mt-4">
                                    <x-label class="text-red-600" for="asunto"
                                        value="Asunto/Descripción/Comentarios *" />
                                    <textarea id="asunto" name="asunto" rows="4"
                                        class="w-full border-vino-900 focus:border-vino-900 focus:ring-vino-900 rounded-md shadow-sm" required></textarea>
                                </div>
                            </div>

                            {{-- Columna derecha --}}
                            <div class="space-y-4">

                                <div class="flex space-x-4">
                                    <div class="mt-4">
                                        <x-label for="municipio_id" value="Municipio" />
                                        <select id="municipio_id" name="municipio_id"
                                            class="w-full border-vino-900 focus:border-vino-900 focus:ring-vino-900 rounded-md shadow-sm">
                                            <option value="" disabled selected>Seleccione un municipio</option>
                                            @foreach ($municipios as $municipio)
                                                <option value="{{ $municipio->id }}">{{ $municipio->nombre }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="mt-4">
                                        <x-label for="dependencia_id" value="Dependencia" />
                                        <select id="dependencia_id" name="dependencia_id"
                                            class="w-full border-vino-900 focus:border-vino-900 focus:ring-vino-900 rounded-md shadow-sm">
                                            <option value="" disabled selected>Seleccione una dependencia</option>
                                            @foreach ($dependencias as $dependencia)
                                                <option value="{{ $dependencia->id }}">{{ $dependencia->nombre }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>


                                <div class="mt-4">
                                    <x-label class="text-red-600" for="tipo_visita_id" value="Tipo de visita *" />
                                    <select id="tipo_visita_id" name="tipo_visita_id"
                                        class="w-full border-vino-900 focus:border-vino-900 focus:ring-vino-900 rounded-md shadow-sm"
                                        required>
                                        <option value="" disabled selected>Seleccione un tipo</option>
                                        @foreach ($tipoVisitas as $tipoVisita)
                                            <option value="{{ $tipoVisita->id }}">{{ $tipoVisita->nombre }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="mt-4">
                                    <x-label for="area_visita" value="Área de visita" />
                                    <div class="flex gap-6 mt-2">
                                        <!-- Radio button para Administrativa -->
                                        <label class="inline-flex items-center">
                                            <input type="radio" id="area_administrativa" name="area_visita"
                                                value="Administrativa"
                                                class="border-vino-900 text-vino-900 focus:border-vino-900 focus:ring-vino-900"
                                                autofocus />
                                            <span class="ml-2 text-gray-700">Administrativa</span>
                                        </label>

                                        <!-- Radio button para Diputados -->
                                        <label class="inline-flex items-center">
                                            <input type="radio" id="area_diputados" name="area_visita"
                                                value="Diputados"
                                                class="border-vino-900 text-vino-900 focus:border-vino-900 focus:ring-vino-900" />
                                            <span class="ml-2 text-gray-700">Diputados</span>
                                        </label>
                                    </div>
                                </div>


                                <div class="mt-4">
                                    <x-label for="area_id" value="Área" />
                                    <select id="area_id" name="area_id"
                                        class="w-full border-vino-900 focus:border-vino-900 focus:ring-vino-900 rounded-md shadow-sm">
                                        <option value="" disabled selected>Seleccione Área</option>
                                        @foreach ($areas as $area)
                                            <option value="{{ $area->id }}">{{ $area->nombre }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="mt-4">
                                    <x-label for="diputado_id" value="Diputado" />
                                    <select id="diputado_id" name="diputado_id"
                                        class="w-full border-vino-900 focus:border-vino-900 focus:ring-vino-900 rounded-md shadow-sm">
                                        <option value="" disabled selected>Seleccione Diputado (en su caso)
                                        </option>
                                        @foreach ($diputados as $diputado)
                                            <option value="{{ $diputado->id }}">{{ $diputado->nombre }}</option>
                                        @endforeach
                                    </select>
                                </div>



                                <div class="mt-4">
                                    <x-label for="gafet" value="Gafet" />
                                    <x-input id="gafet"
                                        class="w-full border-vino-900 focus:border-vino-900 focus:ring-vino-900"
                                        type="text" name="gafet" autofocus />
                                </div>

                            </div>
                        </div>

                        <button type="submit"
                            class="mt-4 bg-vino-900 text-white py-2 px-4 rounded-md">Registrar</button>

                    </form>
                </div>
            </div>
        </div>


        <script>
            document.addEventListener('DOMContentLoaded', function() {
                // Elementos del DOM
                const areaAdministrativa = document.getElementById('area_administrativa');
                const areaDiputados = document.getElementById('area_diputados');
                const areaIdSelect = document.getElementById('area_id').closest('.mt-4');
                const diputadoIdSelect = document.getElementById('diputado_id').closest('.mt-4');

                // Ocultar ambos selectores inicialmente
                areaIdSelect.style.display = 'none';
                diputadoIdSelect.style.display = 'none';

                // Función para mostrar/ocultar selectores
                function toggleSelectors() {
                    if (areaAdministrativa.checked) {
                        areaIdSelect.style.display = 'block';
                        diputadoIdSelect.style.display = 'none';
                        // Hacer opcional el select de diputados
                        document.getElementById('diputado_id').removeAttribute('required');
                        document.getElementById('area_id').setAttribute('required', 'required');
                    } else if (areaDiputados.checked) {
                        areaIdSelect.style.display = 'none';
                        diputadoIdSelect.style.display = 'block';
                        // Hacer opcional el select de área
                        document.getElementById('area_id').removeAttribute('required');
                        document.getElementById('diputado_id').setAttribute('required', 'required');
                    } else {
                        // Ninguno seleccionado
                        areaIdSelect.style.display = 'none';
                        diputadoIdSelect.style.display = 'none';
                    }
                }

                // Event listeners para los radio buttons
                areaAdministrativa.addEventListener('change', toggleSelectors);
                areaDiputados.addEventListener('change', toggleSelectors);

                // Ejecutar al cargar la página por si hay valor predefinido
                toggleSelectors();
            });
        </script>

</x-app-layout>
