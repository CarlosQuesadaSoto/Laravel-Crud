@extends('layouts/app')

@section('content')

<div class="container">

@if (session('mensaje'))
    <div class="alert alert-success">
        {{ session('mensaje')}}
    </div>
@endif



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

<form action="{{route('coches.crear2')}}" method="POST" enctype="multipart/form-data">
    @csrf
    

    @error('marca')
        <div class="alert alert-danger">
           La marca es obligatoria 
        </div>
    @enderror

    @error('modelo')
        <div class="alert alert-danger">
           El modelo es obligatorio
        </div>
    @enderror

    @error('matricula')
        <div class="alert alert-danger">
           La matricula es obligatoria 
        </div>
    @enderror

    @error('precio')
        <div class="alert alert-danger">
           El precio es obligatorio
        </div>
    @enderror

    @error('año')
        <div class="alert alert-danger">
           El año es obligatorio
        </div>
    @enderror

    <input type="text" name="marca" placeholder="marca" class="form-control mb-2"
    value="{{old('marca')}}">

    <input type="text" name="modelo" placeholder="modelo" class="form-control mb-2"
    value="{{old('modelo')}}">

    <input type="text" name="matricula" placeholder="matricula" class="form-control mb-2"
    value="{{old('matricula')}}">

    <input type="text" name="precio" placeholder="precio" class="form-control mb-2"
    value="{{old('precio')}}">

    <input type="text" name="año" placeholder="año" class="form-control mb-2"
    value="{{old('año')}}">

    <input type="file" name="images" placeholder="images" class="form-control mb-2"
    value="{{old('images')}}">

    <input type="text" name="serie" placeholder="serie" class="form-control mb-2"
    value="{{old('serie')}}">

    <button class="btn btn-primary btn-block" type="submit">Añadir</button>
</form>
</div>
    
@endsection