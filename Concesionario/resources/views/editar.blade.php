@extends('layouts/app')

@section('content')


<div class="container">

<h1>Editar modelo {{$modelo->id}}</h1>

@if (session('mensaje'))
    <div class="alert alert-success">
        {{ session('mensaje')}}
    </div>
@endif

<form action="{{route('coches.update',$modelo->id)}}" method="POST">
    @csrf
    @method('PUT')

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
    value="{{$modelo->marca}}">

    <input type="text" name="modelo" placeholder="modelo" class="form-control mb-2"
    value="{{$modelo->modelo}}">

    <input type="text" name="matricula" placeholder="matricula" class="form-control mb-2"
    value="{{$modelo->matricula}}">

    <input type="text" name="precio" placeholder="precio" class="form-control mb-2"
    value="{{$modelo->precio}}">

    <input type="text" name="año" placeholder="año" class="form-control mb-2"
    value="{{$modelo->año}}">

    <button class="btn btn-warning btn-block" type="submit">Editar</button>
</form>

</div>
    
@endsection