@extends('layout.plantilla')
@section('title','Lista de Libros')
@section('contenido')
<div class="row mt-5">
    <div class="col">
        <ul class="list-group" style="color:rgb(44, 22, 236)">
            <li class="list-group-item active bg-warning text-center">Lista de Libros</li>
            @foreach($libro as $libros)
            <li class="list-group-item" style="color:rgb(10, 191, 247)">
                <a class="texto" href="{{route('libros.mostrar', $libros->id)}}">{{$libros->titulo}}</a>
            </li>
            @endforeach
        </ul>
    </div>
</div>
@endsection
@section('pagina')
{{$libro->links()}}
@endsection