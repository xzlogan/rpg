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
                    <h1 class="fw-bold mb-0 fs-2">Cadastro do Atributo</h1>

                </div>
                <div class="modal-body p-5 pt-0">
                    <form accept="/atributo" method="post">
                        @csrf  
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control rounded-3" id="nome"
                                placeholder="name@example.com" name="nome">
                            <label for="floatingInput" class="text-danger">Nome do Atributo</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control rounded-3" id="descricao"
                                placeholder="name@example.com" name="descricao">
                            <label for="floatingInput" class="text-danger">Descrição</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control rounded-3" id="tipo"
                                placeholder="name@example.com" name="tipo">
                            <label for="floatingInput" class="text-danger">Tipo</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control rounded-3" id="referencia"
                                placeholder="name@example.com" name="referencia">
                            <label for="floatingInput" class="text-danger">Referência</label>
                        </div>
                        <button class="w-100 mb-2 btn btn-lg rounded-3 btn-secondary" type="submit">Cadastro</button>
                    </form>
                </div>
            </div>
        </div>
    </div> 

@endsection
