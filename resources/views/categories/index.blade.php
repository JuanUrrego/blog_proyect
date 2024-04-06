@extends('layouts.app')

@section('content')
  <h2 class="text-center text-light">Lista De Categorias</h2>
  <table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Categoría</th>
            <th>Estado</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($categories as $category)
            <tr>
                <td>{{ $category->id}}</td>
                <td>{{ $category->category_name}}</td>
                <td>
                    @if ($category->active)
                        Activa
                    @else
                        Inactiva
                    @endif
                </td>
                <td>
                    <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-success">Editar</a>
                    <a href="{{ route('categories.show', $category->id) }}" class="btn btn-warning">Eliminar</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection
