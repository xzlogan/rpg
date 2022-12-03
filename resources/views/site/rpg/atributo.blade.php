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
                            <select class="form-select text-danger" aria-label="Default select example" name="tipo">
                                <option selected>Selecione o tipo</option>
                                <option value="Físico">Físico</option>
                                <option value="Social">Social</option>
                                <option value="Mental">Mental</option>
                              </select> 
                        </div>
                        <div class="form-floating mb-3">
                            <select class="form-select text-danger" aria-label="Default select example" name="referencia">
                                <option selected>Selecione a referência</option>
                                <option value="Vampiro">Vampiro</option>
                                <option value="Mago">Mago</option>
                                <option value="Lobisomem">Lobisomem </option>
                                <option value="Humano">Humano</option>
                              </select>  
                        </div>
                        
                        <div class="form-floating mb-3">
                            <textarea class="form-control" id="descricao" rows="30" name="descricao"></textarea>
                            <label for="floatingInput" class="text-danger">Descrição</label>
                        </div>
                        <button class="w-100 mb-2 btn btn-lg rounded-3 btn-secondary" type="submit">Cadastro</button>
                    </form>
                </div>
            </div>
        </div>
    </div> 

@endsection
