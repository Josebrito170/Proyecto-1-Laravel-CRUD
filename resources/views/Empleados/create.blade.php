@extends('plantilla')

@section('seccion')

<form action="{{ url('/Empleados')}}" method="post" enctype="multipart/form-date">


  <div class="card card-outline-secondary">
	<div class="card-header">
		<h3 class="mb-0 font-weight-bold">REGISTRAR EMPLEADO </h3>
	</div>

   	<div class="card-body">
		@csrf
	
		@include('Empleados.form',['modo'=>'Guardar']);


	</div>
  </div>
</form>


@endsection
