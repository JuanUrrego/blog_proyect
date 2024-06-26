@extends('layouts.app')

@section('content')
  <h1 class="text-center text-light">Crear Categoría</h1>
  <form action="{{ route('categories.store')}}" method="post">
    @csrf
        <div class="form-group">
            <div class="mb-3">
                <label for="category_name" class="form-label text-light">Nombre Categoria</label>
                <input class="form-control" type="text" name="category_name" id="category_name" placeholder="Category Name"> 
            </div>

            <div class="mb-3 text-white">
                <label for="active">Activa</label>
                <input class="form-check-input" type="checkbox" name="active" id="active" value="1"> 
            </div>

            <button class="btn btn-primary my-2" type="submit">Guardar</button>
            <a href="{{ route('categories.index') }}" class="btn btn-secondary my-2">Regresar</a>
        </div>
    </form>
@endsection

