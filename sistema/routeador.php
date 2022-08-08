<?php

// echo $controlador;
// echo $accion;

include_once("controladores/controlador_".$controlador.".php"); //Toma el controlador, le aporte dinamismo a partir de la concatenacion

$objControlador = "Controlador".ucfirst($controlador);

$controlador =  new $objControlador(); // lo instancia

$controlador->$accion(); //hace uso de un metodo del controlador

?>