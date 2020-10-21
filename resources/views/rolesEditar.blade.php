@extends('plantilla')

@section('contenido')

<form action="{{route('roles.editar', $roles->id)}}" class="formularios" method="POST">
    @method('PUT')
    
    @csrf

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
    @endif

    <label>Name</label>
    <label style="color: red">*</label>
    <input type="text" name="name" placeholder="Name" class="form-control mb-2" value="{{$roles->name}}">
    <label>Display_name</label>
    <label style="color: red">*</label>
    <input type="text" name="display_name" placeholder="Display_name" class="form-control mb-2" value="{{$roles->display_name}}" >
    <button class="btn btn-outline-dark btn-block" type="submit">Send</button>
    
</form>
@endsection