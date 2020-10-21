<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Prueba Laravel</title>
    <style>
      .footer {
        width: 100%;
        height: 80px;
        background-color: black;
        margin-top: 20px;
        text-align: center;
        color: white;
      }

      .header{
        width: 100%;
        height: 80px;
        background-color: black;
        margin-top: 0px;
        text-align: center;
        color: white;
        
      }

      .botones{
        margin-left: 570px;
        margin-top: 30px;
      }

      .formularios{
        margin-top: 80px;
      }
      
      .btn-block{
        margin-top: 30px;
      }
      .page-link {
        position: relative;
        display: block;
        padding: 0.5rem 0.75rem;
        margin-left: -1px;
        line-height: 1.25;
        color: white;
        background-color:#343a40;
        border: 1px solid black;
      }

      .page-item.disabled .page-link {
        color: #868e96;
        pointer-events: none;
        cursor: auto;
        background-color: white;
        border-color: #718393;
      }

      .page-item.active .page-link {
        z-index: 1;
        color: #fff;
        background-color: grey;
        border-color: grey;
      }

      .page-link:focus, .page-link:hover {
        color: #fff;
        text-decoration: none;
        background-color: grey;
        border-color: white;
      }
    </style>
  </head>


  <body>
    <header>
      <div class="header">
        <h2 class="class display-4">Header</h2>
        
      </div>
    </header>
    
    <div class="botones">
      <a href="{{route('inicio')}}" class="btn btn-dark">Index</a>
      <a href="{{route('usuarios')}}" class="btn btn-dark">Users</a>
      <a href="{{route('status')}}" class="btn btn-dark">Statuses</a>
      <a href="{{route('rol')}}" class="btn btn-dark">Roles</a>
      <a href="{{route('carrera')}}" class="btn btn-dark">Career</a>
      <a href="{{route('medias')}}" class="btn btn-dark">Media</a>
      <a href="{{route('mediables')}}" class="btn btn-dark">Mediable</a>
    </div>

    <div class="container">
      @yield('contenido')
    </div>
    
    
      <div class="footer">
        <h2 class="class display-4">Footer</h2>
      </div>
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>