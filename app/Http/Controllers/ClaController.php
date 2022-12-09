<?php

namespace App\Http\Controllers;

use App\Models\Cla;
use Illuminate\Http\Request;

class ClaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('site.rpg.cla');
    }
    public function listar()
    {
       
        
         $clas = Cla::all();

         return view('site.rpg.clas', ['clas' => $clas]);
        
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

        $cla = new Cla();
        $cla->titulo = $request->get('titulo');
        $cla->apelido = $request->get('apelido');
        $cla->descricao = $request->get('descricao');
        $cla->tipo = $request->get('tipo');
        $cla->mascara = $request->get('mascara');
        $cla->ressonancia = $request->get('ressonancia');
        $cla->quemSao = $request->get('quemSao');
        $cla->arquetipos = $request->get('arquetipos');
        $cla->primaria = $request->get('primaria');
        $cla->secundaria = $request->get('secundaria');
        $cla->terciaria = $request->get('terciaria');
        $cla->fraqueza = $request->get('fraqueza');
        $cla->organizacao = $request->get('organizacao');
        $cla->save();
        return redirect()->route('atributo.listar'); 
 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cla  $cla
     * @return \Illuminate\Http\Response
     */
    public function show(Cla $cla)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cla  $cla
     * @return \Illuminate\Http\Response
     */
    public function edit(Cla $cla)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cla  $cla
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cla $cla)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cla  $cla
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cla $cla)
    {
        //
    }
}
