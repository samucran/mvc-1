@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Categorias</h2>

        <a href="{{ route('categories.create') }}" class="btn btn-success">Crear categoria nueva</a>

        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Categoria</th>
                    <th>Descripcion</th>
                    <th>Creacion</th>
                    <th>Actualizacion</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $category)
                    <tr>
                        <td>{{ $category->id }}</td>
                        <td>{{ $category->name }}</td>
                        <td>{{ $category->description }}</td>
                        <td>{{ $category->created_at }}</td>
                        <td>{{ $category->updated_at }}</td>
                        <td>
                            <a href="{{ route('categories.show', $category->id) }}" class="btn btn-info">Ver</a>
                            <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-warning">Editar</a>
                            <form method="POST" action="{{ route('categories.destroy', $category->id) }}" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Esta seguro que quiere eliminar?')">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
