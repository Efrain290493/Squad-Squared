<?php

class Rutas_controlador
{

    public function IniciarPlantilla()
    {
        include("./vistas/plantillas/plantilla.view.php");

    }

    // armar la ruta del formulario recibido desde la

    public function Rutas()
    {

        if (isset($_GET["ruta"])) {
            $ruta = $_GET["ruta"];
        }
        else {
            $ruta = "dashboard/dashboard";
        }
        /**Llamar al modelo para armar la ruta */
        $rutaformulario = RutasModelo::RutasModelo($ruta);

        include $rutaformulario;

    }
    
}
?>