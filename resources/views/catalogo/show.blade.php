@extends('template.template')

@section('title')
    Produto por ID
@endsection()

@section('content')
    <ul>
        <li><h1>{{$produto->nome}}</h1></li>
        <li>Nome do produto: {{$produto->nome}}</li>
        <li>Preço do produto: {{$produto->preco}}</li>
        @if(file_exists('./img/produtos/'.md5($produto->id)))
            <li><img src="{{asset('img/produtos/'.md5($produto->id))}}" width="500" height="500"></li>
        @endif
    </ul>

    @if(Auth::check())
        <a href="{{$produto->id}}/edit">Editar</a>
        
        
        <form action="/catalogo/{{$produto->id}}" method="POST">
            @csrf
            @method('DELETE')

            <input type="submit" value="Deletar">
        </form>
    @endif
    <a href="/catalogo">Voltar</a>

@endsection()
