@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Editar categoria</h2>

        <form method="POST" action="{{ route('categories.update', $category->id) }}">
            @csrf
            @method('PATCH')
            @include('dashboard.category._form')
            <button type="submit" class="btn btn-primary">Actualizar</button>
        </form>
    </div>
@endsection
