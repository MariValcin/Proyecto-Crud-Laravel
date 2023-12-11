@extends('plantilla.Pmostrar')

@section('Titulo')

@section('Contenido')

    <header>
        <nav>
            <ul>
                <li><a href="{{ route('crud.index')}}">Inicio</a></li>
                <li><a href="{{ route('crud.create')}}">Crear Productos</a></li>
                <li><a href="{{ route('crud.show')}}">Producto</a></li>
            </ul>
            <h1>Productos Disponibles</h1>
        </nav>
    </header>
    <ul class="mostrar">
        @foreach ($producto as $producto )
        <li class="listado"><a href="{{route ('crud.unico',$producto->id)}}" class="enlace">{{$producto->name}}</a></li>
        <br>
    
            
        @endforeach
    </ul>
    
@endsection