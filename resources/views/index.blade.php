@extends('layout.app')

@section('title-site','Site Artetex')

@section('content')
    <div id="home">
        @include('home.index')
    </div>

    <div id="servicos">
        @include('servicos.index')
    </div>

    <div class="divider"></div>

    <div id="sobre">
        @include('sobre.index')
    </div>

    <div id="tecidos">
        @include('tecidos.index')
    </div>

    <div id="novidades">
        @include('novidades.index')
    </div>

    {{-- <div id="contato">
        @include('contato.index')
    </div> --}}
@endsection
