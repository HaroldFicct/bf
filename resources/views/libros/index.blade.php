@extends('layouts.app') 

@section('content') 


<div class="container">
    <h2>Lista de Libros <a href="books/create"> <button type="buton" class="btn btn-success float-right">Añadir libro</button> </a> </h2>

    <table class="table">
    <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">titulo</th>
            <th scope="col">autor</th>
            <th scope="col">año de edicion</th>
            <th scope="col">Cantidad de pagina</th>
            <th scope="col">Cantidad</th>  
            <th scope="col">Editor</th>
            <th scope="col">Disco</th>  
            <th scope="col">categoria</th>
        </tr>
    </thead>

    <tbody>
        @foreach($books as $book)
        <tr>
            <th scope="row">{{$book->id}}</th>
            <td>{{$book->titulo}}</td>
            <td>{{$book->autor}}</td>
            <td>{{$book->anioEdicion}}</td>
            <td>{{$book->cantPag}}</td>
            <td>{{$book->cantidad}}</td>
            <td>{{$book->editor}}</td>
            <td>{{$book->conDisco}}</td>
            <td>{{$book->categorias->descripcion}}</td>

            <td>
                
            </td>
        </tr>
        @endforeach
    </tbody>
    </table>
</div>

@endsection