<?php

namespace App\Http\Controllers;

use App\Models\Atributo;
use Illuminate\Http\Request;

class AtributoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('site.rpg.atributo');
    }
    public function listar()
    {
       
        
         $atributos = Atributo::all();

         return view('site.rpg.atributos', ['atributos' => $atributos]);
        
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        echo "aqui";
        //return view('site.rpg.atributo');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
          
        $regras = [
            'nome' => 'required|min:3|max:40',
        ];

        $feedback = [
            'required' => 'O campo :attribute deve ser preenchido',
            'nome.min' => 'O campo nome de ter no mínimo 3 caracteres',
            'nome.max' => 'O campo nome de ter no máximo 40 caracteres',
        ];

        $request->validate($regras, $feedback);

        $atributo = new Atributo();
        $atributo->nome = $request->get('nome');
        $atributo->descricao = $request->get('descricao');
        $atributo->tipo = $request->get('tipo');
        $atributo->referencia = $request->get('referencia');
        $atributo->save();
         return redirect()->route('atributo.listar'); 

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Atributo  $atributo
     * @return \Illuminate\Http\Response
     */
    public function show(Atributo $atributo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Atributo  $atributo
     * @return \Illuminate\Http\Response
     */
    public function edit(Atributo $atributo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Atributo  $atributo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Atributo $atributo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Atributo  $atributo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Atributo $atributo)
    {
        //
    }
}
