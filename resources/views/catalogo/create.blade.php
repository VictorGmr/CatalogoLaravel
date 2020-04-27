@extends('template.template')

@section('title')
    Criar novo produto
@endsection

@section('content')
    <form action="/catalogo" enctype="multipart/form-data" method="POST">
        @csrf
        <label for="nome">Nome do produto:</label>
        <input type="text" name="nome" id="nome">
    
        <label for="preco">Preço do produto:</label>
        <input type="number" name="preco" id="preco">

        <label for="foto">Selecione a imagem do produto:</label>
        <input type="file" name="foto" id="foto">

        <input type="submit" value="Adicionar">
    </form>
@endsection()