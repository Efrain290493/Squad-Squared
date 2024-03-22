<?php

    /** Incluir los archivos de controladores requeridos */

    require_once("./controladores/rutas.controlador.php");




    /** Incluir los archivos de modelos requeridos */

    require_once "modelos/rutas.modelo.php";



    /**Inicializar la clase */
    $rutas = new Rutas_controlador();

    /**Ejecutar la funcion Inicializar Plantilla */

    $rutas->IniciarPlantilla();



?>