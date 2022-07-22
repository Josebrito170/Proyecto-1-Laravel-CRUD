
@extends('plantilla')

@section('seccion')

<div class="container d-flex justify-content-between">
  <h1>Empleados <i class='bx bx-user-pin' ></i></h1>

    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
      <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
      </symbol>
    </svg>
    @if(Session::has('mensaje'))
    <div class="alert alert-success w-50 alert-dismissible d-flex align-items-center fade show" role="alert" id="alert">
        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
      
        <h5 class="font-weight-bold mt-2"><strong>Aviso! </strong>{{ Session::get('mensaje')}}</h5>
    
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
    @endif

  <a href="{{url('Empleados/create')}}" class="btn h-25 btn-outline-primary"><h4 class="mt-2">Registrar empleados</h4></a>
</div>
	
	<table class="table table-striped table-hover">
       <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Foto</th>
      <th scope="col">Nombre</th>
      <th scope="col">Apellido Paterno</th>
      <th scope="col">Apellido Materno</th>
      <th scope="col">Correo</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>
  <tbody>
    @foreach( $Empleados as $item)
    <tr>
     <td>{{ $item->id}}</td>

    <td>
      <img src="{{ $item->foto }}" alt="">
    </td>

     <td>{{ $item->Nombre}}</td>
     <td>{{ $item->apellidoPaterno}}</td>
     <td>{{ $item->apellidoMaterno}}</td>
     <td>{{ $item->correo}}</td>
     <td>

      <a href="{{ url('/Empleados/'.$item->id.'/edit') }}" class="btn bg-success text-white">Editar</a>

      

      <form action="{{ url('/Empleados/'.$item->id) }}" class="formulario-eliminar" 
        method="post">
          @csrf
          {{method_field('DELETE')}}
          <input type="submit" onclick="return confirm('¿Quieres borrar?')" class="bg-danger  text-white btn mt-2" value="Borrar">

        </form>
     </td>
    </tr>
    @endforeach
  </tbody>
    </table>

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="sweetalert2.all.min.js"></script>


@endsection