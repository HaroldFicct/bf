@extends('layouts.app')

@section('content')
<div class="container" >
  <div class="row">
      <div class="col-sm-8">
        
        <h1>Crear un nueva libro</h1>
        <form action="/books" method="POST">
          @csrf
          <div class="mb-3">
            <label for="titulo" class="form-label">Ingrese el titulo </label>
            <input type="text" class="form-control" name="titulo" placeholder="titulo">
          </div>

          <div class="mb-3">
            <label for="autor" class="form-label">Ingrese el autor </label>
            <input type="text" class="form-control" name="autor" placeholder="autor">
          </div>

          <div class="mb-3">
            <label for="año" class="form-label">Año de edicion </label>
            <input type="text" class="form-control" name="anioEdicion" placeholder="autor">
          </div>

          <div class="mb-3">
            <label for="autor" class="form-label">Cantidad paginas </label>
            <input type="text" class="form-control" name="cantPag" placeholder="cantidad de paginas">
          </div>

          <div class="mb-3">
            <label for="autor" class="form-label">Cantidad de libros</label>
            <input type="text" class="form-control" name="cantidad" placeholder="cantidad">
          </div>

          <div class="mb-3">
            <label for="autor" class="form-label">Ingrese el editor </label>
            <input type="text" class="form-control" name="editor" placeholder="editor">
          </div>

          <div class="mb-3">
            <label for="conDisco" class="form-label">Disco </label>
            <select name="conDisco" class="form-control">
                <option selected disabled> Elije una opcion</option>
                <option value="1">Con Disco</option>
                <option value="0">Sin Disco</option>
            </select>
        </div>

          <div class="mb-3">
            <label for="categoria" class="form-label">Categoria</label>
            <select name="categoriaId"  class="form-control">
              <option selected disabled> Elije una categoria</option>
              @foreach($categorias as $categoria)
              <option value="{{ $categoria->id }}">{{$categoria->descripcion}}</option>
              @endforeach
            </select>
            </div>
          <button type="submit" class="btn btn-primary">Registrar</button>
          <button type="reset"class="btn btn-danger">Limpiar</button>
        
        </form>
        <div class="mb-3">
          <a href="{{url('books')}}" >
            <button class="btn btn-secondary">Cancelar</button>
          </a>
        </div> 
      </div>              
  </div>
</div>

@endsection