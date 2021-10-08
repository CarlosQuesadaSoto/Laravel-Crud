@extends('layouts/app')

@section('content')

<div class="container">


<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="collapse navbar-collapse" id="navbarSupportedContent">

      <input class="form-control mr-sm-2" type="text" placeholder="Buscar" aria-label="Buscar" id="search">
      {{-- <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button> --}}

  </div>
</nav>

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
      <th scope="col">Serie</th>
    </tr>
  </thead>
  <tbody>

  </tbody>
</table>  

</div>
    
@endsection
