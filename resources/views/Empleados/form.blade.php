    
<style>
	.icon{
		font-size: 28px;
	}

	.icon2{
		font-size: 55px;
		margin-left: 150px;
	}
</style>

		@if(count($errors)>0)
   	     		<div class="row shadow mx-auto alert alert-danger mb-0 pb-0 px-0" role="alert">
   	     			<div class="col-9 px-0">
   	     				<ul>
   	     				@foreach( $errors->all() as $error)
   	     				<li>{{$error}}</li>
   	     			    @endforeach

   	     			    
   	     			</ul>
   	     			</div>
   	     			
   	     			<div class="col-3 px-0">
   	     			   <i class=' bx bxs-confused icon2'></i>
   	     			</div>
   	     		</div>
   	     			
   	   	@endif
   	   	<br>

   	     <div class="form-group">
   	     		
   	     <label for="Nombre">Nombre</label>
	     <input class="form-control" type="text" name="Nombre" value="{{ isset($empleado->Nombre)?$empleado->Nombre:old('Nombre') }}" id="     Nombre">
	     

	     <label for="ApellidoPaterno">Apellido Paterno</label>
	     <input class="form-control" type="text" name="apellidoPaterno" value="{{      isset($empleado->apellidoPaterno)?$empleado->apellidoPaterno:old('apellidoPaterno') }}" id="ApellidoPaterno">
	     

		<label for="ApellidoMaterno">Apellido Materno</label>
		<input class="form-control" type="text" name="apellidoMaterno" value="{{ isset($empleado->apellidoMaterno)?$empleado->apellidoMaterno:old('apellidoMaterno') }}" id="ApellidoMaterno">
		

		<label for="Correo">Correo</label>
		<input class="form-control" type="text" name="correo" value="{{ isset($empleado->correo)?$empleado->correo:old('correo') }}"  id="Correo">
		

		<label for="Foto">Foto</label>

		@if (isset($empleado->foto))
			<img src="{{ asset('public').'/'.$empleado->foto }}" alt="">
		@endif

		<input class="form-control" type="file" name="foto" value="" id="Foto">
		<br>
		<input href="{{url('Empleados')}}" class="btn btn-success btn-lg" type="submit" value="{{$modo}} datos">

   	    </div>
 

</div>
   
    