<?php

namespace App\Http\Controllers;

use App\Models\Conceito;
use Illuminate\Http\Request;

class ConceitoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('site.rpg.conceito');
    }

    public function listar()
    {
       
        
         $conceitos = Conceito::all();

         return view('site.rpg.conceitos', ['conceitos' => $conceitos]);
        
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

        $atributo = new Conceito();
        $atributo->titulo = $request->get('titulo');
        $atributo->descricao = $request->get('descricao');
        $atributo->requisito = $request->get('requisito');
        $atributo->bonus = $request->get('bonus');
        $atributo->save();
         return redirect()->route('conceito.listar'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Conceito  $conceito
     * @return \Illuminate\Http\Response
     */
    public function show(Conceito $conceito)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Conceito  $conceito
     * @return \Illuminate\Http\Response
     */
    public function edit(Conceito $conceito)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Conceito  $conceito
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Conceito $conceito)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Conceito  $conceito
     * @return \Illuminate\Http\Response
     */
    public function destroy(Conceito $conceito)
    {
        //
    }
}
