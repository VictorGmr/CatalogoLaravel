@extends('layouts.app')

@section('title')
    Produto por ID
@endsection()

@section('content')

    <div class="card" style="text-align:center; padding-bottom:20px;">
        
        <h1>{{$produto->nome}}</h1>
        <p>Nome do produto: {{$produto->nome}}</p>
        <p>Preço do produto: R${{$produto->preco}}</p>
        @if(file_exists('./img/produtos/'.md5($produto->id)))
            <div>
                <img src="{{asset('img/produtos/'.md5($produto->id))}}" width="500" height="500">
            </div>
        @else
        <div>
                <img src="{{asset('img/produtos/no-image.png')}}" width="500" height="500">
            </div>
        @endif
        

        @if(Auth::check())
            <div>

                <a style="display:inline-block;" href="{{$produto->id}}/edit"><button class="btn btn-primary">Editar</button></a>
                
                
                <form style="display:inline-block;" action="/catalogo/{{$produto->id}}" method="POST">
                    @csrf
                    @method('DELETE')

                    <button class="btn btn-danger" type="submit">Deletar</button>
                </form>

                <a style="display:inline-block;" href="/catalogo"><button class="btn btn-primary">Voltar</button></a>
            </div>
        </div>
            
        @else
        <div style="text-align:center;">
            <a href="/catalogo"><button class="btn btn-primary">Voltar</button></a>
        </div>
            
        @endif
    </div>

    
    

@endsection()
