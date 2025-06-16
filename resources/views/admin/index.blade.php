@extends('_layaout')
@section('navbar')
<!--Los index seran la vista principal para algo-->
<div class="card" style="width: 18rem;">
  <img src="{{asset('images/MX.webp')}}" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Creacion de usuario</h5>
    <p class="card-text">Esta es la tarjeta para crear un usuario.</p>
    <a href="#" class="btn btn-primary">Crear usuario</a>
  </div>
</div>

<div class="card" style="width: 18rem;">
  <img src="{{asset('images/Amlo.webp')}}" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Ver usuario</h5>
    <p class="card-text">Visualiza los usuarios.</p>
    <a href="#" class="btn btn-primary">Ver usuarios</a>
  </div>
</div>
@endsection