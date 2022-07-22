@extends('plantilla')

@section('seccion')
	<h2>NOSOTROS</h2>
	<h3>Este es mi equipo de trabajo</h3>

	@foreach($equipo as $grupo)
		<a href="{{ route('nosotros', $grupo)}}" class="text-success h4">{{$grupo}}</a><br>
	@endforeach

	@if(!empty($nombre))
		
		@switch($nombre)

		   @case($nombre=='Jose')
		   <h2 class="mt-5 mb-4">El nombre es {{$nombre}}:</h2>
		   <p>{{$nombre}} Lorem ipsum, dolor sit amet consectetur adipisicing, elit. Deserunt quis consectetur eveniet incidunt quaerat exercitationem quibusdam architecto, officia eaque, quae voluptatibus delectus eligendi laudantium, commodi accusantium illo ea vitae. Incidunt non excepturi iusto, eligendi ut.</p>
		   @break

		   @case($nombre=='Andres')
		   <h2 class="mt-5 mb-4">El nombre es {{$nombre}}:</h2>
		   <p>{{$nombre}} Lorem ipsum, dolor sit amet consectetur adipisicing, elit. Deserunt quis consectetur eveniet incidunt quaerat exercitationem quibusdam architecto, officia eaque, quae voluptatibus delectus eligendi laudantium, commodi accusantium illo ea vitae. Incidunt non excepturi iusto, eligendi ut.</p>
		   @break

		   @case($nombre=='Miguel')
		   <h2 class="mt-5 mb-4">El nombre es {{$nombre}}:</h2>
		   <p>{{$nombre}} Lorem ipsum, dolor sit amet consectetur adipisicing, elit. Deserunt quis consectetur eveniet incidunt quaerat exercitationem quibusdam architecto, officia eaque, quae voluptatibus delectus eligendi laudantium, commodi accusantium illo ea vitae. Incidunt non excepturi iusto, eligendi ut.</p>
		   @break
		@endswitch
	@endif
@endsection