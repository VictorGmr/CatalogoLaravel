@extends('layouts.app')

@section('title')
    Todos os produtos
@endsection()

@section('content')

    <h1>Produtos</h1>

    <ul>
        @foreach($produto as $prod)
            <li><a href="catalogo/{{$prod->id}}">{{$prod->nome}}</a></li>
            @if(file_exists('./img/produtos/'.md5($prod->id)))
                <li><a href="catalogo/{{$prod->id}}"><img width="300" height="300" src="{{asset('img/produtos/'.md5($prod->id))}}"></a></li>    
            @endif
            @endforeach
    </ul>


    @if(Auth::check())
        <a href="catalogo/create">Adicionar</a>
    @endif
    

    {{$produto->links()}}
@endsection()
