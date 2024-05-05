@extends('layout.app')

@section('title-site', "Tecidos")

@section('content')


        <div  class="tecidos">
            <h2>Tecidos</h2>
        </div>

        <div class="tecido-pagina container">
            <div class="item" id="item1">
                <img src="{{asset("img/tecido01.jpg")}}" alt="Imagem 1">
                <div class="overlay">
                    <h3>Título 1</h3>
                    <p>Descrição 1</p>
                    <a href="https://api.whatsapp.com/send?phone=SEUNUMERO">Fale Conosco</a>
                </div>
            </div>
            <div class="item" id="item2">
                <img src="{{asset("img/tecido02.jpg")}}" alt="Imagem 2">
                <div class="overlay">
                    <h3>Título 2</h3>
                    <p>Descrição 2</p>
                    <a href="https://api.whatsapp.com/send?phone=SEUNUMERO">Fale Conosco</a>
                </div>
            </div>
            <div class="item" id="item3">
                <img src="{{asset("img/tecido03.jpg")}}" alt="Imagem 3">
                <div class="overlay">
                    <h3>Título 3</h3>
                    <p>Descrição 3</p>
                    <a href="https://api.whatsapp.com/send?phone=SEUNUMERO">Fale Conosco</a>
                </div>
            </div>
        </div>

        <div class="tecido-pagina container">
            <div class="item" id="item1">
                <img src="{{asset("img/tecido01.jpg")}}" alt="Imagem 1">
                <div class="overlay">
                    <h3>Título 1</h3>
                    <p>Descrição 1</p>
                    <a href="https://api.whatsapp.com/send?phone=SEUNUMERO">Fale Conosco</a>
                </div>
            </div>
            <div class="item" id="item2">
                <img src="{{asset("img/tecido02.jpg")}}" alt="Imagem 2">
                <div class="overlay">
                    <h3>Título 2</h3>
                    <p>Descrição 2</p>
                    <a href="https://api.whatsapp.com/send?phone=SEUNUMERO">Fale Conosco</a>
                </div>
            </div>
            <div class="item" id="item3">
                <img src="{{asset("img/tecido03.jpg")}}" alt="Imagem 3">
                <div class="overlay">
                    <h3>Título 3</h3>
                    <p>Descrição 3</p>
                    <a href="https://api.whatsapp.com/send?phone=SEUNUMERO">Fale Conosco</a>
                </div>
            </div>
        </div>




@endsection
