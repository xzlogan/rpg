<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>RPG - @yield('titulo')</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="{{ asset('public/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/css/estilo_basico.css') }}">

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
        <div class="content text-center">
            <h1 class="text-danger">RPG </h1>
            <h3 class="text-danger">Mundo das Trevas</h3>
            <br /><br /><br /> 


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
