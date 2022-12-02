@extends('site.layouts.basico')

@section('titulo', 'Vampiro')
@section('imagem_principal', 'img/img03.jpg')

@section('conteudo')
    <div class="card bg-secondary rounded-0 border border-0">
        <img class="" src="{{ asset('img/sangue01.png') }}" class="card-img" alt="...">
        <div class="card-img-overlay">
             
        </div>
    </div>
    <div class="modal modal-signin position-static d-block bg-secondary py-5" tabindex="-1" role="dialog" id="modalSignin">
        <div class="modal-dialog" role="document">
            <div class="modal-content rounded-4 shadow">
                <div class="modal-header p-5 pb-4 border-bottom-0">
                    <!-- <h1 class="modal-title fs-5" >Modal title</h1> -->
                    <h1 class="fw-bold mb-0 fs-2">Cadastro de Atributos</h1>

                </div>
                <div class="modal-body p-5 pt-0">
                     listar aqui

                     <table border="1" width="100%">
                        <thead>
                            <tr>
                                <th>Nome</th>
                                <th>Site</th>
                                <th>UF</th>
                                <th>E-mail</th>
                                <th></th>
                                <th></th>
                            </tr>
                        </head>
    
                        <tbody>
                            @foreach($atributos as $atributo)
                                <tr>
                                    <td>{{ $atributo->nome }}</td>
                                    <td>{{ $atributo->descricao }}</td>
                                    <td>{{ $atributo->tipo }}</td>
                                    <td>{{ $atributo->referencia }}</td>
                                    <td> </td>
                                    <td> </td>
                                </tr>
                                <tr>
                                    <td colspan="6">
                                        <p>Lista de produtos</p>
                                        
                                    </td>
                                <tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div> 

@endsection
