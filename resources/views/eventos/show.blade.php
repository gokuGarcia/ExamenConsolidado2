<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ $evento->nombre }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <dl class="grid grid-cols-1 gap-x-4 gap-y-8 sm:grid-cols-2">
                        <div class="sm:col-span-2">
                            <dt class="text-sm font-medium text-gray-500">Descripción</dt>
                            <dd class="mt-1 text-sm text-gray-900">{{ $evento->descripcion }}</dd>
                        </div>
                        <div>
                            <dt class="text-sm font-medium text-gray-500">Fecha de inicio</dt>
                            <dd class="mt-1 text-sm text-gray-900">{{ \Carbon\Carbon::parse($evento->fecha_inicio)->format('d/m/Y H:i') }}</dd>
                        </div>
                        <div>
                            <dt class="text-sm font-medium text-gray-500">Fecha de fin</dt>
                            <dd class="mt-1 text-sm text-gray-900">{{ \Carbon\Carbon::parse($evento->fecha_fin)->format('d/m/Y H:i') }}</dd>
                        </div>
                        <div class="sm:col-span-2">
                            <dt class="text-sm font-medium text-gray-500">Ubicación</dt>
                            <dd class="mt-1 text-sm text-gray-900">{{ $evento->ubicacion }}</dd>
                        </div>

                        <div class="sm:col-span-2 mt-6">
                            <h3 class="text-lg font-medium text-gray-900">Organizadores</h3>
                            
                            @if($evento->organizadores->count() > 0)
                                <ul class="mt-2 divide-y divide-gray-200">
                                    @foreach($evento->organizadores as $organizador)
                                        <li class="py-3 flex justify-between">
                                            <div>
                                                <p class="text-sm font-medium text-gray-900">{{ $organizador->nombre }} {{ $organizador->apellido }}</p>
                                                <p class="text-sm text-gray-500">{{ $organizador->email }}</p>
                                            </div>
                                            <p class="text-sm text-gray-500">{{ $organizador->pivot->rol }}</p>
                                        </li>
                                    @endforeach
                                </ul>
                            @else
                                <p class="text-sm text-gray-500 mt-2">No hay organizadores asociados a este evento.</p>
                            @endif
                        </div>
                    </dl>

                    <div class="flex items-center justify-end mt-6">
                        <a href="{{ route('eventos.index') }}" class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded mr-2">
                            Volver
                        </a>
                        <a href="{{ route('eventos.edit', $evento) }}" class="bg-indigo-500 hover:bg-indigo-700 text-white font-bold py-2 px-4 rounded mr-2">
                            Editar
                        </a>
                        <form action="{{ route('eventos.destroy', $evento) }}" method="POST" class="inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded" onclick="return confirm('¿Estás seguro de eliminar este evento?')">
                                Eliminar
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
