@extends('plantilla')

@section('contenido')

<h1>Users</h1>
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
      <th scope="col">Lastname</th>
      <th scope="col">Username</th>
      <th scope="col">Email</th>
      <th scope="col">Password</th>
      <th scope="col">Rol</th>
      <th scope="col">Career</th>
      <th scope="col">Status</th>
      <th scope="col">Eliminar</th>
      <th scope="col">Editar</th>
    </tr>
  </thead>
  <tbody>
      @foreach($users as $item)
    <tr>
      <th scope="row">{{$item->id}}</th>
      <td>{{$item->name}}</td>
      <td>{{$item->lastname}}</td>
      <td>{{$item->username}}</td>
      <td>{{$item->email}}</td>
      <td>{{$item->password}}</td>
      <td>{{$item->role->display_name}}</td>
      <!--
      @foreach ($rol as $objeto)
          @if ($item->role_id == $objeto->id)
            <td>{{$objeto->display_name}}</td>
          @endif
      @endforeach
      -->
      <td>{{$item->career->name}}</td>
      <!--
      @foreach ($career as $objeto)
          @if ($item->career_id == $objeto->id)
            <td>{{$objeto->name}}</td>
          @endif
      @endforeach
      -->
      <td>{{$item->status->display_name}}</td>
      <!--
      @foreach ($status as $objeto)
          @if ($item->status_id == $objeto->id)
            <td>{{$objeto->display_name}}</td>
          @endif
      @endforeach
      -->
      <td>
        <form action="{{route('users.eliminar')}}" method="POST">
          @csrf
          <input type="hidden" name="id" value="{{$item->id}}">
          <button type="submit" class="btn btn-danger">Eliminar</button>
        </form>
      </td>
      <td>
        <a href="{{route('users.vistaEditar', $item)}}" class="btn btn-light">Editar</a>
      </td>
    </tr>
    @endforeach()
  </tbody>
</table>
{{$users->links()}}
<form action="{{route('users.crear')}}" class="formularios" method="POST">
  @csrf

  @if ($errors->has('name'))
        <div class="alert alert-danger">
          Todos los campos son obligatorios
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>
    @elseif($errors->has('lastname'))
        <div class="alert alert-danger">
          Todos los campos son obligatorios
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>
   @elseif($errors->has('username'))
        <div class="alert alert-danger">
          Todos los campos son obligatorios
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>
    @elseif($errors->has('email'))
        <div class="alert alert-danger">
          Todos los campos son obligatorios
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>
    @elseif($errors->has('password'))
        <div class="alert alert-danger">
          Todos los campos son obligatorios
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>
    @elseif($errors->has('is_ad'))
        <div class="alert alert-danger">
          Todos los campos son obligatorios
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>
    @elseif($errors->has('role_id'))
        <div class="alert alert-danger">
          Todos los campos son obligatorios
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>
    @elseif($errors->has('career_id'))
        <div class="alert alert-danger">
          Todos los campos son obligatorios
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>
    @elseif($errors->has('status_id'))
        <div class="alert alert-danger">
          Todos los campos son obligatorios
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>
    @endif
    <h2 class="mb-4">Add new user</h2>
  <label>Name</label>
  <label style="color: red">*</label>
    <input type="text" name="name" placeholder="Name" class="form-control mb-2" value="{{old('name')}}">
  <label>Lastname</label>
  <label style="color: red">*</label>
    <input type="text" name="lastname" placeholder="Lastname" class="form-control mb-2" value="{{old('lastname')}}">
  <label>Username</label>
  <label style="color: red">*</label>
    <input type="text" name="username" placeholder="Username" class="form-control mb-2" value="{{old('username')}}">
  <label>Email</label>
  <label style="color: red">*</label>
    <input type="email" name="email" placeholder="Email" class="form-control mb-2" value="{{old('email')}}">
  <label>Password</label>
  <label style="color: red">*</label>
    <input type="password" name="password" placeholder="Password" class="form-control mb-2" value="{{old('password')}}">
      <small id="passwordHelpBlock" class="form-text text-muted">
        Your password must be 8-20 characters long, contain letters and numbers, and must not contain spaces, special characters, or emoji.
      </small>
  <label>Is_ad</label>
  <label style="color: red">*</label>
    <input type="text" name="is_ad" placeholder="Is_ad" class="form-control mb-2" value="{{old('is_ad')}}">
  
  <label>Rol</label>
  <label style="color: red">*</label>
    <select name="role_id" class="form-control mb-2">
      @foreach ($rol as $item)
    <option value="{{$item->id}}">{{$item->display_name}}</option>
      @endforeach
    </select>

  <label>Career</label>
  <label style="color: red">*</label>
    <select name="career_id" class="form-control mb-2">
      @foreach ($career as $item)
    <option value="{{$item->id}}">{{$item->name}}</option>
      @endforeach
    </select>

  <label>Status</label>
  <label style="color: red">*</label>
    <select name="status_id" class="form-control mb-2">
      @foreach ($status as $item)
    <option value="{{$item->id}}">{{$item->display_name}}</option>
    @endforeach
    </select>

  <button class="btn btn-outline-dark btn-block" type="submit">Send</button>
</form>

@endsection