<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTemaRequest;
use App\Http\Requests\UpdateTemaRequest;
use App\Models\Album;
use App\Models\Tema;

class TemaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('temas.index', [
            'temas' => Tema::with('album')->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('temas.create', [
            'tema' => new Tema(),
            'albumes' => Album::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreTemaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTemaRequest $request)
    {
        $validados = $request->validated();
        $tema = new Tema($validados);
        $tema->album_id = $validados['album'];
        $tema->save();

        return redirect()->route('temas.index')->with('success', '!Tema creado con exito!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tema  $tema
     * @return \Illuminate\Http\Response
     */
    public function show(Tema $tema)
    {
        return view('temas.show', [
            'tema' => $tema,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tema  $tema
     * @return \Illuminate\Http\Response
     */
    public function edit(Tema $tema)
    {
        return view('temas.edit', [
            'tema' => $tema,
            'albumes' => Album::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTemaRequest  $request
     * @param  \App\Models\Tema  $tema
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTemaRequest $request, Tema $tema)
    {
        $validados = $request->validated();
        $tema->nombre = $validados['nombre'];
        $tema->duracion = $validados['duracion'];
        $tema->album_id = $validados['album'];
        $tema->save();

        return redirect()->route('temas.index')->with('success', '!Tema editado con exito!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tema  $tema
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tema $tema)
    {
        $tema->delete();

        return redirect()->route('temas.index')->with('success', 'Tema eliminado con exito.');
    }
}
