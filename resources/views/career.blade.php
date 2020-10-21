@extends('plantilla')

@section('contenido')

<h1>Careers</h1>
@if (session('mensaje'))
    <div class="alert alert-success" style="margin-top: 50px">
      {{session('mensaje')}}
      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    </div>
@endif
<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Eliminar</th>
      <th scope="col">Editar</th>
    </tr>
  </thead>
  <tbody>
      @foreach($career as $item)
    <tr>
      <th scope="row">{{$item->id}}</th>
      <td>{{$item->name}}</td>
      <td>
        <form action="{{route('career.eliminar')}}" method="POST">
          @csrf
          <input type="hidden" name="id" value="{{$item->id}}">
          <button type="submit" class="btn btn-danger">Eliminar</button>
        </form>
      </td>
      <td>
        <a href="{{route('career.vistaEditar', $item)}}" class="btn btn-light">Editar</a>
      </td>
      
    </tr>
    @endforeach()
  </tbody>
</table>
{{$career->links()}}
<form action="{{route('career.crear')}}" class="formularios" method="POST">
  @csrf

  @if ($errors->has('name'))
        <div class="alert alert-danger">
          Todos los campos son obligatorios
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>
  @endif
  <h2 class="mb-4">Add new career</h2>
  <label>Name</label>
  <label style="color: red">*</label>
  <input type="text" name="name" placeholder="Name" class="form-control mb-2" value="{{old('name')}}">
  <button class="btn btn-outline-dark btn-block" type="submit">Send</button>
  
</form>

@endsection