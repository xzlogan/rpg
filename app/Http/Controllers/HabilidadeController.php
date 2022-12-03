<?php

namespace App\Http\Controllers;

use App\Models\Habilidade;
use Illuminate\Http\Request;

class HabilidadeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('site.rpg.habilidade');
    }

    public function listar()
    {
       
        
         $habilidades = Habilidade::all();

         return view('site.rpg.habilidades', ['habilidades' => $habilidades]);
        
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
       
          
        $regras = [
            'nome' => 'required|min:3|max:40',
        ];

        $feedback = [
            'required' => 'O campo :attribute deve ser preenchido',
            'nome.min' => 'O campo nome de ter no mínimo 3 caracteres',
            'nome.max' => 'O campo nome de ter no máximo 40 caracteres',
        ];

        $request->validate($regras, $feedback);

        $habilidade = new Habilidade();
        $habilidade->nome = $request->get('nome');
        $habilidade->descricao = $request->get('descricao');
        $habilidade->tipo = $request->get('tipo');
        $habilidade->referencia = $request->get('referencia');
        $habilidade->save();
         return redirect()->route('habilidade.listar'); 

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Habilidade  $habilidade
     * @return \Illuminate\Http\Response
     */
    public function show(Habilidade $habilidade)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Habilidade  $habilidade
     * @return \Illuminate\Http\Response
     */
    public function edit(Habilidade $habilidade)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Habilidade  $habilidade
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Habilidade $habilidade)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Habilidade  $habilidade
     * @return \Illuminate\Http\Response
     */
    public function destroy(Habilidade $habilidade)
    {
        //
    }
}
