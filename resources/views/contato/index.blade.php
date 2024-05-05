@extends('layout.app')

@section('title-site', "Contato")

@section('content')
    <div class="d-flex justify-content-center align-itens-center flex-row">
        <div class="w-50">
            <h2>Entre em contato conosco</h2>
            <p>Sinta-se à vontade para falar conosco, não hesite em nos contatar</p>
        </div>
        <div class="w-50">
            <div class="container">
                <h2>Entre em Contato</h2>
                <form method="POST" action="{{ route('contato.store') }}">
                    @csrf
                    <div class="form-group">
                        <label for="nome">Nome:</label>
                        <input type="text" class="form-control" id="nome" name="nome" required>
                    </div>
                    <div class="form-group">
                        <label for="email">E-mail:</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="mensagem">Mensagem:</label>
                        <textarea class="form-control" id="mensagem" name="mensagem" rows="5" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Enviar Mensagem</button>
                </form>
            </div>
        </div>
    </div>
@endsection
