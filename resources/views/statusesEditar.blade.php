@extends('plantilla')

@section('contenido')

<form action="{{route('statuses.editar', $status->id)}}" class="formularios" method="POST">
    <!-- Tocken de validacion (Siempre incluir) -->
    @method('PUT')
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
      <!-- Campos del formulario -->
        <label>Name</label> 
        <label style="color: red">*</label>
          <input type="text" name="name" placeholder="Name" class="form-control mb-2" value="{{$status->name}}">
        <label>Display_name</label>
        <label style="color: red">*</label>
          <input type="text" name="display_name" placeholder="Display_name" class="form-control mb-2" value="{{$status->display_name}}">
        <label>Color</label>
        <label style="color: red">*</label>
          <input type="text" name="color" placeholder="Color" class="form-control mb-2" value="{{$status->color}}">
      <button class="btn btn-outline-danger btn-block" type="submit">Send</button>
  </form>
@endsection