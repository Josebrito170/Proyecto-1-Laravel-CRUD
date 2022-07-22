
@extends('plantilla')

@section('seccion')


<form action="{{ url('/Empleados/'.$empleado->id )}}" method="post" enctype="multipart/form-date">
	
<div class="card card-outline-secondary">
	<div class="card-header">
		<h3 class="mb-0 font-weight-bold">Formulario de edición</h3>
	</div>

   	<div class="card-body">
	@csrf
	{{method_field('PATCH')}}

	@include('Empleados.form',['modo'=>'Editar']);

	</div>
</div>

</form>

@endsection
