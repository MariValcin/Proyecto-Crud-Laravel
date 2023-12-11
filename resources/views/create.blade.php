@extends('plantilla.Pcreate')

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
    </header>
    <div class="contenedor">
    <form action="{{ route('crud.store') }}" method="POST">
       @csrf 
        <h1>Ingrese un Producto al Sistema</h1>
        <label for="">
            Nombre del producto:
            <br>
            <input type="text" name="name">
        </label>
        <br><br>
        <label for="">
            Tipo de producto:
            <br>
            <input type="text" name="tipo">
        </label>
        <br><br>
        <label for="">
            Descripcion del Producto:
        <br>
        <input type="text" name="descripcion">
        </label>
        <br><br>
        <button>Ingresar</button>
       
    </form>
    </div>
    
@endsection