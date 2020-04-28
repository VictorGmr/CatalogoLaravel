@extends('layouts.app')

@section('title')
    Todos os produtos
@endsection()

@section('content')

    <h1>Produtos</h1>
    <div style="text-align:center;">
        

        @if($produto->count() == 0)
            <div class="jumbotron jumbotron-fluid">
                <div class="container">
                    <h4 class="display-4">There are no products currently registered.</h4>
                </div>
            </div>
        @endif

        @foreach($produto as $prod)
            @if(file_exists('./img/produtos/'.md5($prod->id)))
                <div class="card" style="margin-top:5px; padding: 20px;display:inline-block;"><a href="catalogo/{{$prod->id}}"><img width="300" height="300" src="{{asset('img/produtos/'.md5($prod->id))}}"></a><br />{{$prod->nome}}</div>   
            @else
                <div class="card" style="margin-bottom: 10px; padding: 20px;display:inline-block;"><a href="catalogo/{{$prod->id}}"><img width="300" height="300" src="{{asset('img/produtos/no-image.png')}}"></a><br />{{$prod->nome}}</div>
            @endif 
        @endforeach
       
    </div>
    
    

    <div>
        <div style="margin-bottom: 10px;">
            @if(Auth::check())
                <a href="catalogo/create"><button class="btn btn-primary">Adicionar</button></a>
            @endif
        </div>

        <div style="display:inline-block">
            {{$produto->links()}}
        </div>
    </div>
    

    
@endsection()
