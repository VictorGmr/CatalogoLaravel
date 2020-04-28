@extends('layouts.app')

@section('title')
    Todos os produtos
@endsection()

@section('content')

    <div class="card" style="text-align: center; position:absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); width: 1200px; height: 800px;">
        <h1>Produtos</h1>
    

            <ul>
                @foreach($produto as $prod)
                    @if(file_exists('./img/produtos/'.md5($prod->id)))
                        <li style="padding: 20px;display:inline-block"><a href="catalogo/{{$prod->id}}"><img width="300" height="300" src="{{asset('img/produtos/'.md5($prod->id))}}"></a><br />{{$prod->nome}}</li></li>    
                    @else
                        <li style="padding: 20px;display:inline-block"><a href="catalogo/{{$prod->id}}"><img width="300" height="300" src="{{asset('img/produtos/no-image.png')}}"></a><br />{{$prod->nome}}</li></li>
                    @endif 
                @endforeach
            </ul>

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
    </div>

    
@endsection()
