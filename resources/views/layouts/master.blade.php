<!doctype html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>CityFunSpots</title>

  <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.1/css/materialize.min.css">

  <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.1/js/materialize.min.js"></script>


</head>
<body>
    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand" href="{{url('home/')}}">CityFunSpots</a>
        </div>
        <div class="nav navbar-nav navbar-right">
            <li><a href="{{ url('home/') }}">CityFunSpots</a></li>
        </div>
      </div>
    </nav>

    <section>
      <!-- Espacio para los mensajes flash enviados entre solicitudes -->

@if(Session::has('flash_message'))
    <article class="alert alert-success">
          {{ Session::get('flash_message') }}
    </article>

@endif
        <!-- Espacio para el contenido de la página -->

        <article class="container">
          @if($errors->any())
              <div class="alert alert-danger">
                  @foreach($errors->all() as $error)
                      <p>{{ $error }}</p>
                  @endforeach
              </div>
          @endif
            @yield('content')
        </article>
    </section>
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
     <script type="text/javascript" src="js/materialize.min.js"></script>
</body>
</html>
