<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Envios Squared-Logistics</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="./assets/temas/adminlte/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="./assets/temas/adminlte/dist/css/adminlte.css">
</head>

<body class="hold-transition sidebar-mini">



  <!-- Site wrapper -->
  <div class="wrapper">
    <?php

    include("encabezado.view.php");

    include("menu.view.php");


    /*Validar que ruta se esta pasando por la url para abrir la pagina*/

    $rutas = new Rutas_controlador();
    $rutas->Rutas();

    // include("./vistas/dashboard/dashboard.vista.php");
    
    ?>

    <?php

    include("piepagina.view.php");

    ?>

  </div>
  <!-- Site wrapper -->

  <!-- jQuery -->
  <script src="./assets/temas/adminlte/plugins/jquery/jquery.js"></script>
  <!-- Bootstrap 4 -->
  <script src="./assets/temas/adminlte/plugins/bootstrap/js/bootstrap.bundle.js"></script>
  <!-- AdminLTE App -->
  <script src="./assets/temas/adminlte/dist/js/adminlte.js"></script>

</body>

</html>