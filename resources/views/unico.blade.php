@extends('plantilla.Punico')

@section('Titulo')

@section('Contenido')

   </div>
  </div>
</div>

    <header>
        <nav>
            <ul>
                <li><a href="{{ route('crud.index') }}">Inicio</a></li>
                <li><a href="{{ route('crud.create') }}">Crear Productos</a></li>
                <li><a href="{{ route('crud.show') }}">Producto</a></li>
            </ul>
          
        </nav>
        <h1>Edicion de productos</h1>
    </header>

   
    <div class="contenedor">
         <h2 class="titulo_camisa">Producto: {{$producto->name}}</h2>
         <br><br>
        <div class="contenedor1">
            <h2 class="tipo">Tipo de Producto: {{$producto->tipo}}</h2>
    </div>
    <br><br>
    <div class="contenedor2">
        <h2 class="descripcion">Descripcion del Producto: {{$producto->descripcion}}</h2>
    </div>
    <br><br>
        <p><a href="{{route('crud.edit',$producto->id)}}" class="edit">Editar Producto</a></p>
        <br><br>
    <form action="{{route('crud.destroy',$producto)}}" method="post">
        @csrf
        @method('delete')
        <button type="submit">Eliminar producto</button>
    </form>

    @endsection