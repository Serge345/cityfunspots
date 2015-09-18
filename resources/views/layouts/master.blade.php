<!doctype html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>CityFunSpots</title>

<!-- Recursos de Bootstrap -->
<!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>
<body>
    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand" href="#">CityFunSpots</a>
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
            @yield('content')
        </article>
    </section>
</body>
</html>
