@extends('plantilla')

@section('contenido')

<h1 class="mb-4">Statuses</h1>
@if (session('mensaje'))
    <div class="alert alert-success" style="margin-top: 50px">
      {{session('mensaje')}}
      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    </div>
@endif
<!-- tabla de Bootstrap -->
<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Display_name</th>
      <th scope="col">Color</th>
      <th scope="col">Eliminar</th>
      <th scope="col">Editar</th>
    </tr>
  </thead>
  <tbody>
    <!-- foreach que muestra los datos en la tabla -->
      @foreach($status as $item)
    <tr>
      <th scope="row">{{$item->id}}</th>
      <td>{{$item->name}}</td>
      <td>{{$item->display_name}}</td>
      <td>{{$item->color}}</td>
      <td>
        <form action="{{route('statuses.eliminar')}}" method="POST">
          @csrf
          <input type="hidden" name="id" value="{{$item->id}}">
          <button type="submit" class="btn btn-danger">Eliminar</button>
        </form>
      </td>
      <td>
        <a href="{{route('statuses.vistaEditar', $item)}}" class="btn btn-light">Editar</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
{{$status->links()}}

<!-- Formulario -->
<form action="{{route('statuses.crear')}}" class="formularios" method="POST">
  <!-- Tocken de validacion (Siempre incluir) -->
    @csrf

    <!-- Refuerzo de la validazion, si no esta un campo entonces muestra un mensaje de alerta -->
    @if ($errors->has('name'))
        <div class="alert alert-danger">
          Todos los campos son obligatorios
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>
    @elseif($errors->has('display_name'))
        <div class="alert alert-danger">
          Todos los campos son obligatorios
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>
   @elseif($errors->has('color'))
        <div class="alert alert-danger">
          Todos los campos son obligatorios
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>
    @endif
    <h2 class="mb-4">Add new status</h2>
    <!-- Campos del formulario -->
    <label>Name</label> 
    <label style="color: red">*</label>
      <input type="text" name="name" placeholder="Name" class="form-control mb-2" value="{{old('name')}}">
    <label>Display_name</label>
    <label style="color: red">*</label>
      <input type="text" name="display_name" placeholder="Display_name" class="form-control mb-2" value="{{old('display_name')}}">
    <label>Color</label>
    <label style="color: red">*</label>
    <input type="text" name="color" placeholder="Color" class="form-control mb-2" value="{{old('color')}}">
    <button class="btn btn-outline-dark btn-block" type="submit">Send</button>
    
</form>

@endsection