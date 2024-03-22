<?php


class RutasModelo{
    static public function RutasModelo($ruta){
        if ($ruta == "admin/admin/admin"
            || $ruta == "dashboard/dashboard"
            || $ruta == "calendar/calendar"
            || $ruta == "envios/cotizar/cotizar"
            || $ruta == "envios/historial/historial"
            || $ruta == "envios/programarEnvio/programarEnvio"
            || $ruta == "envios/seguimiento/seguimiento"
            || $ruta == "errores/errores/errores"
            || $ruta == "contacto/contacto")
        {
            $pagina = "./vistas/" . $ruta . ".vista.php";
            return $pagina;
        } else {
            return "./vistas/error404.vista.php"; // Manejo de caso de ruta no válida
        }
    }
}


?>