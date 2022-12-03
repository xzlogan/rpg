@extends('site.layouts.basico')

@section('titulo', 'Vampiro')
@section('imagem_principal', 'public/img/img03.jpg')

@section('conteudo')
    <div class="card bg-secondary rounded-0 border border-0">
        <img class="" src="{{ asset('public/img/sangue01.png') }}" class="card-img" alt="...">
        <div class="card-img-overlay">

        </div>
    </div>
    <div class="modal modal-signin position-static d-block bg-secondary py-5" tabindex="-1" role="dialog" id="modalSignin">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content rounded-4 shadow" style="width: 100%;">
                <div class="text-center ">
                    <!-- <h1 class="modal-title fs-5" >Modal title</h1> -->
                    <h1 class="fw-bold mb-0 fs-2 text-center">Lista de Habilidade</h1>

                </div>
                <div class="d-grid gap-2">
                     <a href="/habilidade" class="btn btn-outline-danger rounded-0">Novo Registro</a>
                  </div>
                <div class="bd-example-snippet bd-code-snippet">
                    <div class="bd-example">
                        <table class="table table-dark table-borderless">
                            <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Nome</th>
                                    <th scope="col">Descrição</th>
                                    <th scope="col">Tipo</th>
                                    <th scope="col">Referência</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($habilidades as $habilidade)
                                    <tr>
                                        <td>{{ $habilidade->id }}</td>
                                        <td>{{ $habilidade->nome }}</td>
                                        <td>{{ $habilidade->descricao }}</td>
                                        <td>{{ $habilidade->tipo }}</td>
                                        <td>{{ $habilidade->referencia }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
