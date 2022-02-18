<x-contenido>
    <x-slot name="cabecera">
        Crear tema
    </x-slot>
    <form action="{{ route('temas.store', [], false) }}" method="POST">
        @csrf
        @method('POST')
        <h1 class="text-center text-2xl font-bold text-gray-500 mb-10">CREAR TEMA</h1>
        <div class="space-y-4">
            <div>
                <label for="nombre" class="text-xl">Nombre:</label>
                <input type="text" placeholder="nombre" name="nombre" id="nombre" class="ml-2 outline-none py-1 px-2 text-md border-2 rounded-md @error('nombre') border-red-500 @enderror" value="{{ old('nombre', $tema->nombre) }}"/>
                @error('nombre')
                    <span class="flex items-center font-medium tracking-wide text-red-500 text-xs mt-1 ml-1">
                        {{ $message }}
                    </span>
                @enderror
            </div>
            <div>
                <label for="duracion" class="text-xl">Duracion:</label>
                <input type="text" placeholder="00:00" name="duracion" id="duracion" class="ml-2 outline-none py-1 px-2 text-md border-2 rounded-md @error('duracion') border-red-500 @enderror" value="{{ old('duracion', $tema->duracion) }}"/>
                @error('duracion')
                    <span class="flex items-center font-medium tracking-wide text-red-500 text-xs mt-1 ml-1">
                        {{ $message }}
                    </span>
                @enderror
            </div>
            <div>
                <label for="album" class="text-xl">Album:</label>
                <select name="album" id="album">
                    @foreach ($albumes as $album)
                        <option value="{{ $album->id }}">{{ $album->titulo}}</option>
                    @endforeach
                </select>
                @error('album')
                    <span class="flex items-center font-medium tracking-wide text-red-500 text-xs mt-1 ml-1">
                        {{ $message }}
                    </span>
                @enderror
            </div>
            <button type="submit" class=" px-6 py-2 mx-auto block rounded-md text-lg font-semibold text-indigo-100 bg-indigo-600">Anadir tema</button>
        </div>
    </form>
</x-contenido>
