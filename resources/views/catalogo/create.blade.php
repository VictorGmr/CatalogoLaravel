@extends('layouts.app')

@section('title')
    Criar novo produto
@endsection

@section('content')
    <div class="card" style="padding: 30px; position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%)">
        <form action="/catalogo" enctype="multipart/form-data" method="POST">
            @csrf
            <div class="form-group">
                <label for="nome">Nome do produto:</label>
                <input class="form-control"type="text" name="nome" id="nome">
            </div>
            
            <div class="form-group">
                <label for="preco">Preço do produto:</label>
                <input class="form-control" type="number" min="1" step="any" name="preco" id="preco">
            </div>
            
            <div class="form-group">
                <label for="foto">Selecione a imagem do produto:</label>
                <input class="form-control-file" type="file" name="foto" id="foto">
            </div>

    
            <button class="btn btn-primary" type="submit">Adicionar</button>
        </form>
    </div>
    
@endsection()