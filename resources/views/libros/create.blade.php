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
            <label for="año" class="form-label">Ingrese el año </label>
            <input type="text" class="form-control" name="anioEdicion" placeholder="autor">
          </div>

          <div class="mb-3">
            <label for="autor" class="form-label">Ingrese el autor </label>
            <input type="text" class="form-control" name="cantPag" placeholder="cantidad de paginas">
          </div>

          <div class="mb-3">
            <label for="autor" class="form-label">Ingrese cantidad de libros</label>
            <input type="text" class="form-control" name="cantidad" placeholder="cantidad">
          </div>

          <div class="mb-3">
            <label for="autor" class="form-label">Ingrese el editor </label>
            <input type="text" class="form-control" name="editor" placeholder="editor">
          </div>

          <div class="mb-3">
            <label for="autor" class="form-label">Con disco </label>
            <input type="text" class="form-control" name="conDisco" placeholder="con disco?">
          </div>
          <div class="mb-3">
            <label for="autor" class="form-label">Ingrese el autor </label>
            <input type="text" class="form-control" name="autor" placeholder="autor">
          </div>

          <div class="mb-3">
            <label for="email" class="form-label">categoria</label>
            <select name="categoriaId"  class="form-control">
              <option selected disabled> Elije una categoria</option>
              @foreach($categorias as $categoria)
              <option value="{{ $categoria->id }}">{{$categoria->descripcion}}</option>
              @endforeach
            </select>
            </div>

          <div class="mb-3">

          <button type="submit" class="btn btn-primary">Registrar</button>
          <button type="reset"class="btn btn-danger">Limpiar</button>
        </form>
        <div class="mb-3">
          <a href="{{url('categorias')}}" >
            <button class="btn btn-secondary">Cancelar</button>
          </a>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection