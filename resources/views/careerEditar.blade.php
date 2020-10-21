@extends('plantilla')

@section('contenido')
    
<form action="{{route('career.editar', $career->id)}}" class="formularios" method="POST">
    @method('PUT')
    @csrf
  
    @if ($errors->has('name'))
          <div class="alert alert-danger">
            Todos los campos son obligatorios
              <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          </div>
    @endif
    <label>Name</label>
    <label style="color: red">*</label>
    <input type="text" name="name" placeholder="Name" class="form-control mb-2" value="{{$career->name}}">
    <button class="btn btn-outline-dark btn-block" type="submit">Send</button>
    
  </form>


@endsection