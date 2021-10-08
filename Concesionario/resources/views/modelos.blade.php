@extends('layouts/app')

@section('content')

<div class="container">

@if (session('mensaje'))
    <div class="alert alert-success">
        {{ session('mensaje')}}
    </div>
@endif

    <div class="dropdown">
        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Filtrar
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
        <a class="dropdown-item" href="{{route('coches.precio')}}">Más caros</a>
        <a class="dropdown-item" href="{{route('coches.precioB')}}">Más baratos</a>
        <a class="dropdown-item" href="{{route('coches.az')}}">A-Z</a>
        <a class="dropdown-item" href="{{route('coches.za')}}">Z-A</a>
        <a class="dropdown-item" href="{{route('coches.id')}}">ID</a>
        </div>
    </div>

    <br><br>

<table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Marca</th>
      <th scope="col">Modelo</th>
      <th scope="col">Matricula</th>
      <th scope="col">Precio</th>
      <th scope="col">Año</th>
      <th scope="col">Imagen</th>
      <th scope="col">Serie</th>
      <th scope="col">Editar/Eliminar/Añadir</th>
    </tr>
  </thead>
  <tbody>
      @foreach ($modelo as $item)
    <tr>
      <th scope="row">{{$item->id}}</th>
      <td>{{$item->marca}}</td>
      <td>{{$item->modelo}}</td>
      <td>{{$item->matricula}}</td>
      <td>{{$item->precio}}</td>
      <td>{{$item->año}}</td>
      <td><img width="160px" height="100px" src="{{ asset('storage/'.$item->images) }}"></td>
      <td>{{$item->serie}}</td>
      <td><a class="btn btn-warning" href="{{route('coches.editar',$item)}}">Editar</a>
      <form action="{{route('coches.eliminar',$item)}}" method="POST" class="d-inline">
        @method('DELETE')
        @csrf
        <button class="btn btn-danger" type="submit">Eliminar</button>
      </form>
      </td>
    </tr>
      @endforeach

  </tbody>
</table>  

</div>
    
@endsection
