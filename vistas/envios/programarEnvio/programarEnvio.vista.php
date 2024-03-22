<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title style="margin-left: 10%;">Programar envío</title>
    <style>
        /* Estilos personalizados */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
        }

        h1 {
            text-align: left;
            margin-bottom: 20px;
            margin-left: 10%; /* Alinea el título al lado izquierdo */
        }

        form {
            width: 70%;
            margin-left: 10%; /* Ajusta el margen izquierdo del formulario */
        }

        label {
            display: block;
            margin-bottom: 10px;
        }

        input[type="date"],
        input[type="time"],
        input[type="text"],
        select {
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        button[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
        }

        button[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>

<body>
    <h1>Programar envío</h1>
    <form action="index.php?ruta=envios/programarEnvio/programarEnvio" method="post">
        <label for="fecha">Fecha de envío:</label>
        <input type="date" name="fecha" id="fecha">
        <br>
        <label for="hora">Hora de envío:</label>
        <input type="time" name="hora" id="hora">
        <br>
        <label for="origen">Origen:</label>
        <input type="text" name="origen" id="origen" placeholder="Escribe el origen">
        <br>
        <label for="destino">Destino:</label>
        <input type="text" name="destino" id="destino" placeholder="Escribe el destino">
        <br>
        <label for="paquete">Paquete:</label>
        <select name="paquete" id="paquete">
            <option value="">Seleccione un paquete</option>
            <option value="1">Paquete pequeño</option>
            <option value="2">Paquete mediano</option>
            <option value="3">Paquete grande</option>
        </select>
        <br>
        <button type="submit" name="submit">Programar envío</button>
    </form>

    <!-- Incluye la biblioteca de autocompletado de Google Places -->
    <script src="https://maps.googleapis.com/maps/api/js?key=TU_API_KEY&libraries=places"></script>
    <script>
        // Inicializa los campos de origen y destino con autocompletado de Google Places
        function initializeAutocomplete() {
            var originInput = document.getElementById('origen');
            var destinationInput = document.getElementById('destino');
            var options = {
                types: ['(cities)'] // Limita la búsqueda a ciudades
            };

            // Activa el autocompletado en los campos de origen y destino
            new google.maps.places.Autocomplete(originInput, options);
            new google.maps.places.Autocomplete(destinationInput, options);
        }

        // Llama a la función de inicialización cuando se carga la página
        google.maps.event.addDomListener(window, 'load', initializeAutocomplete);
    </script>
</body>

</html>
