<x-contenido>
    <x-slot name="cabecera">
        Editar
    </x-slot>
    <form action="{{ route('albumes.update', [$album], false) }}" method="POST"
        enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <h1 class="text-center text-2xl font-bold text-gray-500 mb-10">EDITAR ALBUM</h1>
        <div class="space-y-4">
            <div>
                <label for="titulo" class="text-xl">Titulo:</label>
                <input type="text" placeholder="titulo" name="titulo" id="titulo" class="ml-2 outline-none py-1 px-2 text-md border-2 rounded-md @error('titulo') border-red-500 @enderror" value="{{ old('titulo', $album->titulo) }}"/>
                @error('titulo')
                    <span class="flex items-center font-medium tracking-wide text-red-500 text-xs mt-1 ml-1">
                        {{ $message }}
                    </span>
                @enderror
            </div>
            <div>
                <label for="portada" class="block mb-2 text-lg">Portada:</label>
                <input type="file" name="portada" id="portada" class="@error('portada') border-red-500 @enderror">
                @error('portada')
                    <span class="flex items-center font-medium tracking-wide text-red-500 text-xs mt-1 ml-1">
                        {{ $message }}
                    </span>
                @enderror
            </div>
            <div>
                <label for="autor" class="text-xl">Autor:</label>
                <input type="text" placeholder="autor" id="autor" name="autor" class="ml-2 outline-none py-1 px-2 text-md border-2 rounded-md @error('autor') border-red-500 @enderror" value="{{ old('autor', $album->autor) }}"/>
                @error('autor')
                    <span class="flex items-center font-medium tracking-wide text-red-500 text-xs mt-1 ml-1">
                        {{ $message }}
                    </span>
                @enderror
            </div>
            <button type="submit" class=" px-6 py-2 mx-auto block rounded-md text-lg font-semibold text-indigo-100 bg-indigo-600">Editar album</button>
        </div>
    </form>
</x-contenido>
