
<nav class="navbar navbar-expand-lg sticky-top">
    <div class="container">
        <div>
            <a class="navbar-brand fs-2" href="{{route('index')}}">
                <img class="" src="{{asset('img/logo.png')}}" alt="" style="width: 50px">
                Artetex
            </a>
        </div>

        {{-- MENU DESKTOP --}}
        <div class="menu-desktop">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#servicos">Serviços</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#sobre">Sobre nós</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#tecidos">Tecidos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contato">Contato</a>
                </li>
                <li class="nav-item">
                    <div class="gap-3 pt-2 d-flex icons-socials-nav">
                        <a href="https://www.instagram.com/artetexestamparia/"><i class="bi bi-instagram"></i></a>
                        <a href="https://api.whatsapp.com/send?phone=5585988902070"><i class="bi bi-whatsapp"></i></a>
                        <a href="mailto:ron28ce@hotmail.com"><i class="bi bi-envelope"></i></a>
                    </div>
                </li>
            </ul>
        </div>

        {{-- MENU MOBILE --}}

        <div class="menu-mobile d-none">
            <button onclick="ativaMenu()" class="btn btn-menu">
                <i class="bi bi-list"></i>
            </button>
        </div>

    </div>
</nav>

<div class="options-mobile d-none">
    <div class="overlay-menu"></div>
    <div class="content-menu">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link active" onclick="ativaMenu()" aria-current="page" href="#home">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" onclick="ativaMenu()" href="#servicos">Serviços</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" onclick="ativaMenu()" href="#sobre">Sobre nós</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" onclick="ativaMenu()" href="#tecidos">Tecidos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" onclick="ativaMenu()" href="#contato">Contato</a>
            </li>
            <li class="nav-item">
                <div class="gap-3 pt-2 d-flex icons-socials-nav">
                    <a onclick="ativaMenu()" href="https://www.instagram.com/artetexestamparia/"><i class="bi bi-instagram"></i></a>
                    <a onclick="ativaMenu()" href="https://api.whatsapp.com/send?phone=5585988902070"><i class="bi bi-whatsapp"></i></a>
                    <a onclick="ativaMenu()" href="mailto:ron28ce@hotmail.com"><i class="bi bi-envelope"></i></a>
                </div>
            </li>
        </ul>
    </div>
</div>
