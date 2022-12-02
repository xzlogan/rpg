<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>RPG - @yield('titulo')</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="{{ asset('public/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('publiccss/estilo_basico.css') }}">

    <style>
        .banner-image {
            background-image: url("@yield('imagem_principal')");
            background-size: cover;
        }
    </style>
</head>

<body>
    @include('site.layouts._partials.menu_usuario')


    <!-- Banner Image  -->
    <div class="banner-image w-100 vh-100 d-flex justify-content-center align-items-center">
        <div class="loginX"> 
        <div class=" p-3 bg-secondary bg-opacity-10 border border-info  rounded ">
            <div class="conteudo-destaque">
       
                <!-- aqui vao o codigo da tela de login -->
        
                <form method="POST" action="{{ route('login') }}">
                  @csrf
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Email address</label>
                      <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
                      <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">Password</label>
                      <input type="password" class="form-control"  name="password" id="password">
                    </div>
                    <div class="mb-3 form-check">
                      <input type="checkbox" class="form-check-input" id="exampleCheck1">
                      <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
            </div>
          </div>
            
        </div>
    </div>


    @yield('conteudo')





    <script src="{{ asset('public/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('public/js/javascript_basico.js') }}"></script>

    <script type="text/javascript">
        var nav = document.querySelector('nav');

        window.addEventListener('scroll', function() {
            if (window.pageYOffset > 100) {
                nav.classList.add('bg-secondary', 'shadow');
            } else {
                nav.classList.remove('bg-secondary', 'shadow');
            }
        });
    </script>
</body>

</html>
