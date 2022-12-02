@extends('site.layouts.basico')

@section('titulo', 'Vampiro')
@section('imagem_principal', 'img/img03.jpg')

@section('conteudo')
    <div class="conteudo-destaque">

        <div class="content text-center">
            <h1 class="text-danger">Cadastro de Personagem</h1>

        </div>
        <div class="container text-center">
            <div class="row">
                <div class="col">
                    <div class="container my-5 d-grid gap-5 container text-center">
                        <div class="card mb-3" style="max-width: 540px;">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <a href="{{ route('site.vampiro') }}">
                                        <img src="{{ asset('img/vampiro.jpg') }}" class="img-fluid rounded-start"
                                            alt="...">
                                    </a>
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">Vampiro</h5>
                                        <p class="card-text">This is a wider card with supporting text below as a natural
                                            lead-in to
                                            additional content. This content is a little bit longer.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="container my-5 d-grid gap-5 container text-center">
                        <div class="card mb-3" style="max-width: 540px;">
                            <div class="row g-0">
                                <div class="col-md-4">
                                  <a href="{{ route('site.mago') }}">
                                    <img src="{{ asset('img/mago.jpg') }}" class="img-fluid rounded-start" alt="...">
                                  </a> 
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">Mago</h5>
                                        <p class="card-text">This is a wider card with supporting text below as a natural
                                            lead-in to
                                            additional content. This content is a little bit longer.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="container my-5 d-grid gap-5 container text-center">
                        <div class="card mb-3" style="max-width: 540px;">
                            <div class="row g-0">
                                <div class="col-md-4">
                                  <a href="{{ route('site.lobisomem') }}">
                                    <img src="{{ asset('img/lobisomem.jpg') }}" class="img-fluid rounded-start"
                                        alt="...">
                                  </a>
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">Lobisomem</h5>
                                        <p class="card-text">This is a wider card with supporting text below as a natural
                                            lead-in to
                                            additional content. This content is a little bit longer.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="container my-5 d-grid gap-5 container text-center">
                        <div class="card mb-3" style="max-width: 540px;">
                            <div class="row g-0">
                                <div class="col-md-4">
                                  <a href="{{ route('site.humano') }}">
                                    <img src="{{ asset('img/humano.jpg') }}" class="img-fluid rounded-start" alt="...">
                                  </a>
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">Caçador</h5>
                                        <p class="card-text">This is a wider card with supporting text below as a natural
                                            lead-in to
                                            additional content. This content is a little bit longer.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
