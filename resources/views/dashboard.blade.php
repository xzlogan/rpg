
@extends('site.layouts.basico')

@section('titulo', 'Vampiro')
@section('imagem_principal', 'public/img/img03.jpg')

@section('conteudo')
    <div class="card bg-secondary rounded-0 border border-0">
        <img class="" src="{{ asset('public/img/sangue01.png') }}" class="card-img" alt="...">
        <div class="card-img-overlay">

        </div>
    </div>

    <div class="card bg-secondary rounded-0 border border-0">
        <div class="pt-4 pb-1 border-t border-gray-200">
            
            <div class="mt-3 space-y-1">
               
                <!-- Authentication -->
               
            </div>
        </div>

        </div>
    </div>
    <div class="modal modal-signin position-static d-block bg-secondary py-5" tabindex="-1" role="dialog" id="modalSignin">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content rounded-4 shadow" style="width: 100%;">
                <div class="row">
                    <div class="col">
                        <div class="text-center ">
                            <!-- <h1 class="modal-title fs-5" >Modal title</h1> -->
                            <h1 class="fw-bold mb-0 fs-2 text-center">{{ Auth::user()->name }} </h1>
                            
                        </div>
                    </div>
                    <div class="col-1">
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
        
                            <x-responsive-nav-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Sair') }}
                            </x-responsive-nav-link>
                        </form>
                    </div>
                     
                  </div>
                  <div class="d-grid gap-2">
                     <a  href="{{ route('profile.edit') }}" class="btn btn-outline-danger rounded-0">{{ Auth::user()->email }}</a>
                    
                    </div>
                <div class="bd-example-snippet bd-code-snippet">
                    <div class="bd-example">
                        Descrição do Jogador
                        <br><br><br>
                        .
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
 
