@extends('layouts.app')

@section('title')
    Edit this product
@endsection

@section('content')

    <div class="card" style="padding: 30px; position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%)">
        <form action="/catalogo/{{$produto->id}}" enctype="multipart/form-data" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="nome">Name of the product:</label>
                <input class="form-control"type="text" name="nome" id="nome" value="{{$produto->nome}}" required>
            </div>
            
            <div class="form-group">
                <label for="preco">Price of the product:</label>
                <input class="form-control" type="number" min="1" step="any" name="preco" id="preco" value="{{$produto->preco}}" required>
            </div>
            
            <div class="form-group">
                <label for="foto">Select a product image:</label>
                <input class="form-control-file" type="file" name="foto" id="foto">
            </div>

            
            <button class="btn btn-primary" type="submit">Edit</button>
            <a href="javascript:history.back()"><button type="button" class="btn btn-primary">Back</button></a>
            
        </form>

        
    </div>
@endsection()