@extends('layouts/app')

@section('content')




<div class="container">
  
  <h1>Coches</h1>
  @if (session('mensaje'))
    <div class="alert alert-success">
        {{ session('mensaje')}}
    </div>
@endif

<form action="{{route('coches.crear')}}" method="POST">
    @csrf

    @error('numero_serie')
        <div class="alert alert-danger">
           El numero de serie es obligatorio 
        </div>
    @enderror

    <input type="text" name="numero_serie" placeholder="Numero de Serie" class="form-control mb-2"
    value="{{old('numero_serie')}}">
    <button class="btn btn-primary btn-block" type="submit">Añadir</button>
</form>
<br>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Numero Serie</th>
      <th scope="col">Redireccionar</th>
    </tr>
  </thead>
  <tbody>
      @foreach ($coches as $item)
    <tr>
      <th scope="row">{{$item->id}}</th>
      <td>{{$item->numero_serie}}</td>
      <td><a class="btn btn-primary" href="{{route('coches.detalle',$item)}}">Ver coches</td>
    </tr>
      @endforeach

  </tbody>
</table>
</div>




    
@endsection