@extends('layout.app')

@section('title-site', "Tecidos")

@section('content')


<div class="container">
    <h1>Lista de Tecidos</h1>
    <div class="tecidos-list">
      <div class="tecido-item">
        <h2>Viscolinho</h2>
        <a href="#" class="btn btn-primary fale-conosco" id="fale-conosco-1">
          <span class="text">Fale Conosco</span>
          <img src="img/icon.png" class="icon" alt="Fale Conosco">
        </a>
      </div>
      <div class="tecido-item">
        <h2>Linho Rústico</h2>
        <a href="#" class="btn btn-primary fale-conosco" id="fale-conosco-2">
          <span class="text">Fale Conosco</span>
          <img src="img/icon.png" class="icon" alt="Fale Conosco">
        </a>
      </div>
      <!-- Adicione mais itens da lista de tecidos aqui -->
    </div>
  </div>




@endsection
