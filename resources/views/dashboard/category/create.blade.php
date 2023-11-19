@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Crear categoria</h2>

        <form method="POST" action="{{ route('categories.store') }}">
            @csrf
            @include('dashboard.category._form')
            <button type="submit" class="btn btn-primary">Crear</button>
        </form>
        <a href="{{ route('categories.index') }}" class="btn btn-primary">Regresar</a>
    </div>
@endsection
