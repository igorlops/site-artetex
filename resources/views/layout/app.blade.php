<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
        crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>@yield('title-site')</title>
</head>
<body>
    <header>

        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Artetex</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{route('home.index')}}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('sobre.index')}}">Sobre nós</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('tecido.index')}}">Tecidos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('contato.index')}}">Contato</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <section class="content">
        @yield('content')
    </section>
    <div class="container-fluid bg-dark text-light py-4">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <h3>Falar com especialista</h3>
              <p>Conheça o nosso trabalho, agende uma reunião:</p>
              <a href="#" class="btn btn-primary">SAIBA MAIS</a>
            </div>
            <div class="col-md-6">
              <h3>Menu</h3>
              <ul class="list-unstyled">
                <li><a href="#">Quem Somos</a></li>
                <li><a href="#">Tecidos</a></li>
                <li><a href="#">Contato</a></li>
              </ul>
              <p>Nosso endereço:<br>Av. Imperador 666, Centro,<br>Fortaleza, CE, CEP: 60.015-050<br>Atendimento: Seg a Sex das 8h às 18:00h</p>
              <p>Fale pelo WhatsApp<br>(85) 99707-0174</p>
            </div>
          </div>
        </div>
      </div>

      <footer class="text-center py-3">
        <p>© 2023 Direitos Reservados - LGPD - <a href="{{route('police.termos')}}">Termos de Uso</a> - <a href="{{route('police.politica')}}">Política de Privacidade</a></p>
      </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>
</html>
