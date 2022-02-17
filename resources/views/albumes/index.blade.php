<x-contenido>
    <x-slot name="cabecera">
        Albumes
    </x-slot>
    <x-success-message/>
    <table>
        <thead class="bg-gray-50">
            <tr>
                <th class="px-6 py-2 text-xs text-gray-500">
                    Portada
                </th>
                <th class="px-6 py-2 text-xs text-gray-500">
                    Titulo
                </th>
                <th class="px-6 py-2 text-xs text-gray-500">
                    Autor
                </th>
                <th class="px-6 py-2 text-xs text-gray-500">
                    Descargar portada
                </th>
                <th class="px-6 py-2 text-xs text-gray-500">
                    Acciones
                </th>
            </tr>
        </thead>
        <tbody class="bg-white">
            @foreach ($albumes as $album)
                <tr class="whitespace-nowrap">
                    <td class="px-6 py-4">
                        <div class="text-sm text-gray-900">
                            <img src="{{ asset('storage/portadas/' . $album->id . '.jpg') }}">
                        </div>
                    </td>
                    <td class="px-6 py-4">
                        <div class="text-sm text-gray-900">
                            {{ $album->titulo }}
                        </div>
                    </td>
                    <td class="px-6 py-4">
                        <div class="text-sm text-gray-900">
                            {{ $album->autor }}
                        </div>
                    </td>
                    <td class="px-6 py-4">
                        <div class="text-sm text-gray-900">
                            <a>Descargar</a>
                        </div>
                    </td>
                    <td class="px-6 py-4">
                        <div class="text-sm text-gray-900">
                            <a href="{{ route('albumes.edit', $album) }}" class="mx-2 my-2 bg-white transition duration-150 ease-in-out hover:bg-gray-100 hover:text-amber-600 rounded border border-amber-700 text-amber-700 px-6 py-2 text-xs focus:outline-none focus:ring-2 focus:ring-offset-2  focus:ring-amber-700">Editar</a>
                        </div>
                        <div class="text-sm text-gray-900">
                            <button class="mx-2 my-2 bg-white transition duration-150 ease-in-out hover:bg-gray-100 hover:text-red-600 rounded border border-red-700 text-red-700 px-6 py-2 text-xs focus:outline-none focus:ring-2 focus:ring-offset-2  focus:ring-red-700">Eliminar</button>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="pt-4">
        <a class="mx-2 my-2 bg-white transition duration-150 ease-in-out hover:bg-gray-100 hover:text-indigo-600 rounded border border-indigo-700 text-indigo-700 px-6 py-2 text-xs focus:outline-none focus:ring-2 focus:ring-offset-2  focus:ring-indigo-700" href="{{ route('albumes.create') }}">Crear nuevo album</a>
    </div>
</x-contenido>
