@extends('layouts.app')

@section('title')
    All the products
@endsection()

@section('content')

    <h1>Products</h1>

    <form style="margin-bottom: 20px;" action="/catalogo/buscar" method="POST">
        @csrf
        <div class="input-group">
            @if($busca == null)
                <input style="margin-right: 10px;" type="text" class="form-control" name="busca" placeholder="Search">
            @else
                <input style="margin-right: 10px;" type="text" class="form-control" name="busca" value="{{$busca}}">
            @endif
            <button type="submit" class="btn btn-primary">Search</button>
        </div>
        
    </form>

    <div style="text-align:center;">
        @if($produto->count() == 0)
            @if($busca == null)
                <div class="jumbotron jumbotron-fluid">
                    <div class="container">
                        <h4 class="display-4">There are no products currently registered.</h4>
                    </div>
                </div>
            @else
                <div class="jumbotron jumbotron-fluid">
                    <div class="container">
                        <h4 class="display-4">No results for your search were found.</h4>
                    </div>
                </div>
            @endif
        @endif

        @foreach($produto as $prod)
            @if(file_exists('./img/produtos/'.md5($prod->id)))
                <div class="card" style="margin-bottom:10px; padding: 20px; display:inline-block;"><a href="/catalogo/{{$prod->id}}"><img width="300" height="300" src="{{asset('img/produtos/'.md5($prod->id))}}"></a><br />{{$prod->nome}}</div>   
            @else
                <div class="card" style="margin-bottom: 10px; padding: 20px;display:inline-block;"><a href="/catalogo/{{$prod->id}}"><img width="300" height="300" src="{{asset('img/no-image.png')}}"></a><br />{{$prod->nome}}</div>
            @endif 
        @endforeach
       
    </div>
    
    

    <div>
        <div style="margin-bottom: 10px">
            @if(Auth::check())
                <a href="/catalogo/create"><button class="btn btn-primary">Add</button></a>
            @endif
        </div>

        <div style="display:inline-block">
            {{$produto->links()}}
        </div>
    </div>
    

    
@endsection()
