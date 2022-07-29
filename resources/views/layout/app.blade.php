<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ env('EMPRESA_NAME')}}</title>
    <!-- Favicon -->
    <!-- Estilos Manejando Archivo propio, basandome en Bootstrap -->
    <style>
      h3 {
        color: tomato
      }
    </style>

    <link rel="stylesheet" href="css/vma.css">
</head>
<body>
    <h1 style="color: brown"> Prueba del Color</h1>
    <h2>Sub menu</h2>
    <!-- Menú general del Sistema -->
  <div>
    <ul class="nav justify-content-end">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Active</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled">Disabled</a>
        </li>
      </ul>
  </div>





    <!-- Header Cabecera de la Pagina -->
    <!-- nav menu de navegacion, poner a la Izquierda -->

    <!-- Contenido o Cuerpo de la pagina -->
    @yield('content')

    <!-- footer -->
    <!-- scripts -->
</body>
</html>