@extends('layouts.app')

@section('title')
    Editar este produto
@endsection

@section('content')
    <form action="/catalogo/{{$produto->id}}" enctype="multipart/form-data" method="POST">
        @csrf
        @method('PUT')
        <label for="nome">Nome do produto:</label>
        <input type="text" name="nome" id="nome" value="{{$produto->nome}}">
    
        <label for="preco">Preço do produto:</label>
        <input type="number" name="preco" id="preco" value="{{$produto->preco}}">

        <label for="foto">Selecione a imagem do produto:</label>
        <input type="file" name="foto" id="foto">

        <input type="submit" value="Editar">
    </form>
@endsection()