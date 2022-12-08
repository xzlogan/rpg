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
        <div class="modal-dialog" role="document">
            <div class="modal-content rounded-4 shadow">
                <div class="modal-header p-5 pb-4 border-bottom-0">
                    <!-- <h1 class="modal-title fs-5" >Modal title</h1> -->
                    <h1 class="fw-bold mb-0 fs-2">Cadastro de Predador</h1>

                </div>
                <div class="modal-body p-5 pt-0">
                    <form accept="/predador" method="post">
                        @csrf  
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control rounded-3" id="titulo"
                                placeholder="name@example.com" name="titulo">
                            <label for="floatingInput" class="text-danger">Título do Predador</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control rounded-3" id="apelido"
                                placeholder="name@example.com" name="apelido">
                            <label for="floatingInput" class="text-danger">Apelido</label>
                        </div> 
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control rounded-3" id="vantagem"
                                placeholder="name@example.com" name="vantagem">
                            <label for="floatingInput" class="text-danger">Vantagem</label>
                        </div>  
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control rounded-3" id="caca"
                                placeholder="name@example.com" name="caca">
                            <label for="floatingInput" class="text-danger">Caça</label>
                        </div> 
                        <div class="form-floating mb-3">
                            <textarea class="form-control" id="descricao" rows="10" name="descricao"></textarea>
                            <label for="floatingInput" class="text-danger">Descrição</label>
                        </div> 
                        
                        <button class="w-100 mb-2 btn btn-lg rounded-3 btn-secondary" type="submit">Cadastro</button>
                    </form>
                </div>
            </div>
        </div>
    </div> 

@endsection
