@extends('plantilla.Pindex')

@section('Titulo')

@section('Contenido')

    <header>
        <nav>
            <ul>
                <li><a href="{{ route('crud.index')}}">Inicio</a></li>
                <li><a href="{{ route('crud.create')}}">Crear Productos</a></li>
                <li><a href="{{ route('crud.show') }}">Producto</a></li>
                
            </ul>
            <h1>Bienvenido a la Pagina Principal</h1>
        </nav>
    </header>
    
@endsection