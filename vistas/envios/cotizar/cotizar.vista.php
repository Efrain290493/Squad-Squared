<!DOCTYPE html>
<html lang="es">

<head>
    
    <meta charset="UTF-8">
    <title>Cotizar envío</title>
    
    <link rel="stylesheet" href="assets/css/fondo.css">
    <link rel="stylesheet" href="assets/css/sombras.css">
    <link rel="stylesheet" href="assets/css/colorTexto.css">
</head>

<body>
    <div class="wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <!-- Alinea el título al centro -->
                        <h1 class="m-0" style="text-align: center;">Cotizar envío</h1>
                        </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Envíos</li>
                            <li class="breadcrumb-item active">Cotizar envío</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </section>

        <section class="content">
            <div class="card">
                <div class="card-header">
                    <button type="submit" class="btn btn-success">Cotizar envío</button>
                    </div>
                <div class="card-body" style="margin: 0 auto; width: 500px;">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <form action="index.php?ruta=envios/cotizar" method="post">
                                        <section class="paquete">
                                            <h2>Información del paquete de prueba</h2>
                                            <label for="peso">Peso:</label>
                                            <input type="text" name="peso" id="peso"
                                                placeholder="Ingrese el peso del paquete">
                                            <br>
                                            <label for="dimensiones">Dimensiones (largo x ancho x
                                                alto):</label>
                                            <input type="text" name="dimensiones" id="dimensiones"
                                                placeholder="Ingrese las dimensiones del paquete">
                                            </section>
                                        <section class="origen-destino">
                                            <h2>Origen y destino</h2>
                                            <label for="origen">Origen:</label>
                                            <input type="text" name="origen" id="origen"
                                                placeholder="Ingrese el origen del envío">
                                            <br>
                                            <label for="destino">Destino:</label>
                                            <input type="text" name="destino" id="destino"
                                                placeholder="Ingrese el destino del envío">
                                            </section>
                                        
                                    </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    
    <script src="assets/js/script.js"></script>
</body>

</html>
