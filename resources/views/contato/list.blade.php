@extends('layout.app')

@section('title-site', "Lista de Contatos")

@section('content')
    <div class="container">
        <h2 class="titulo-sections">Contatos salvos</h2>
        <table class="table table-light table-hover my-5">
            <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Nome</th>
                  <th scope="col">Email</th>
                  <th scope="col">Telefone</th>
                  <th scope="col">Mensagem</th>
                  <th scope="col">Data</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($contatos as $contato)
                <tr>
                    <th scope="row">{{$loop->iteration}}</th>
                    <td>{{$contato->nome}}</td>
                    <td><a href="mailto:{{$contato->email}}">{{$contato->email}}</a></td>
                    <td><a href="tel:{{$contato->telefone}}">{{$contato->telefone}}</a></td>
                    <td>{{$contato->mensagem}}</td>
                    <td>{{$contato->created_at->format('d/m/Y H:i:s')}}</td>
                </tr>
                @endforeach
              </tbody>
        </table>
        {{ $contatos->links() }}
    </div>
@endsection
