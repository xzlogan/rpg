<?php

namespace App\Http\Controllers;

use App\Models\Predador;
use Illuminate\Http\Request;

class PredadorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('site.rpg.predador');
    }
    public function listar()
    {
       
        
         $predadores = Predador::all();

         return view('site.rpg.predadores', ['predadores' => $predadores]);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $regras = [
            'titulo' => 'required|min:3|max:40',
        ];

        $feedback = [
            'required' => 'O campo :attribute deve ser preenchido',
            'titulo.min' => 'O campo nome de ter no mínimo 3 caracteres',
            'titulo.max' => 'O campo nome de ter no máximo 40 caracteres',
        ];

        $request->validate($regras, $feedback);

        $atributo = new Predador();
        $atributo->titulo = $request->get('titulo');
        $atributo->apelido = $request->get('apelido');
        $atributo->descricao = $request->get('descricao');
        $atributo->vantagem = $request->get('vantagem');
        $atributo->caca = $request->get('caca');
        $atributo->save();
         return redirect()->route('predador.listar'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Predador  $predador
     * @return \Illuminate\Http\Response
     */
    public function show(Predador $predador)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Predador  $predador
     * @return \Illuminate\Http\Response
     */
    public function edit(Predador $predador)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Predador  $predador
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Predador $predador)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Predador  $predador
     * @return \Illuminate\Http\Response
     */
    public function destroy(Predador $predador)
    {
        //
    }
}
