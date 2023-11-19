@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Categoria detalles</h2>

        <div>
            <strong>ID:</strong> {{ $category->id }}<br>
            <strong>Categoria:</strong> {{ $category->name }}<br>
            <strong>Descripcion:</strong> {{ $category->description }}<br>
            <strong>Creacion:</strong> {{ $category->created_at }}<br>
            <strong>Actualizacion:</strong> {{ $category->updated_at }}<br>
        </div>

        <a href="{{ route('categories.index') }}" class="btn btn-primary">Regresar</a>
    </div>
@endsection
