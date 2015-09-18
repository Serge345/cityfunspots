<!doctype html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>My WiFi Networks</title>

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
          <a class="navbar-brand" href="#">My WiFi Networks</a>
        </div>
        <div class="nav navbar-nav navbar-right">
            <li><a href="{{ url('home/') }}">Networks</a></li>
        </div>
      </div>
    </nav>

    <section>
        <!-- Espacio para el contenido de la página -->

        <article class="container">
            @yield('content')
        </article>
    </section>
</body>
</html>
