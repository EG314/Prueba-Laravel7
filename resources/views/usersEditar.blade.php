@extends('plantilla')

@section('contenido')
    
<form action="{{route('users.editar', $users->id)}}" class="formularios" method="POST">
    @method('PUT')
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
  
    <label>Name</label>
    <label style="color: red">*</label>
      <input type="text" name="name" placeholder="Name" class="form-control mb-2" value="{{$users->name}}">
    <label>Lastname</label>
    <label style="color: red">*</label>
      <input type="text" name="lastname" placeholder="Lastname" class="form-control mb-2" value="{{$users->lastname}}">
    <label>Username</label>
    <label style="color: red">*</label>
      <input type="text" name="username" placeholder="Username" class="form-control mb-2" value="{{$users->username}}">
    <label>Email</label>
    <label style="color: red">*</label>
      <input type="email" name="email" placeholder="Email" class="form-control mb-2" value="{{$users->email}}">
    <label>Password</label>
    <label style="color: red">*</label>
      <input type="password" name="password" placeholder="Password" class="form-control mb-2" value="{{$users->password}}"">
        <small id="passwordHelpBlock" class="form-text text-muted">
          Your password must be 8-20 characters long, contain letters and numbers, and must not contain spaces, special characters, or emoji.
        </small>
    <label>Is_ad</label>
    <label style="color: red">*</label>
      <input type="text" name="is_ad" placeholder="Is_ad" class="form-control mb-2" value="{{$users->is_ad}}">
    
    <label>Rol</label>
    <label style="color: red">*</label>
      <select name="role_id" class="form-control mb-2">
        @foreach ($rol as $item)
            @if ($users->role_id == $item->id)
                <option selected value="{{$item->id}}">{{$item->display_name}}</option>
            @elseif($users->role_id != $item->id)
                <option value="{{$item->id}}">{{$item->display_name}}</option>
            @endif 
        @endforeach
      </select>
  
    <label>Career</label>
    <label style="color: red">*</label>
      <select name="career_id" class="form-control mb-2">
        @foreach ($career as $item)
            @if ($users->career_id == $item->id)
                <option selected value="{{$item->id}}">{{$item->name}}</option>
            @elseif($users->career_id != $item->id)
                <option value="{{$item->id}}">{{$item->name}}</option>
            @endif
        @endforeach
      </select>
  
    <label>Status</label>
    <label style="color: red">*</label>
      <select name="status_id" class="form-control mb-2">
        @foreach ($status as $item)
            @if ($users->status_id == $item->id)
                <option selected value="{{$item->id}}">{{$item->display_name}}</option>
            @elseif($users->status_id != $item->id)
                <option value="{{$item->id}}">{{$item->display_name}}</option>
            @endif
      @endforeach
      </select>
  
    <button class="btn btn-outline-dark btn-block" type="submit">Send</button>
  </form>


@endsection