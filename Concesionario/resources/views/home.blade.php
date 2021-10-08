@extends('layouts.app')

@section('content')

<div class="content">

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="https://wallpaperaccess.com/full/302998.jpg" alt="Imagen ford">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="https://wallpaperaccess.com/full/302994.jpg" alt="Imagen mclaren">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="https://wallpapercave.com/wp/wp8023034.jpg" alt="Imagen bmw">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Anterior</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Siguiente</span>
  </a>
</div>
</div>
@endsection
