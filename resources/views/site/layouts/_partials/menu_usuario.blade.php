<!-- Navbar  -->
<nav class="navbar fixed-top navbar-expand-lg navbar-dark p-md-3">
    <div class="container">
        <a class="navbar-brand" href="#">RPG</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <div class="mx-auto"></div>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{ route('site.index') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#">Jogador</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#">Personagem</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#">Aventuras</a>
                </li>
                <li class="nav-item dropdown text-white">
                    <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        RPG
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="#">Action</a></li>
                      <li><a class="dropdown-item" href="#">Another action</a></li>
                      <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                  </li>
                <li class="nav-item dropdown text-white">
                    <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Usuário
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="{{ route('login') }}">Acessar</a></li>
                      <li><a class="dropdown-item" href="{{ route('register') }}">Registrar</a></li> 
                    </ul>
                  </li>
            </ul>
        </div>
    </div>
</nav>
