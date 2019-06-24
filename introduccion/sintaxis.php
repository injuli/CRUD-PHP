<?php 
// varialbe tipo nímero
$numero = 10;

echo 'Esto es un número: '.$numero;

// variable tipo texto 
$texto = "Esto es una cadena de texto";

echo '<br> Mi cadena: '.$texto;

// variable tipo booleana

$booleana = true;

echo '<br>Esto es una variable booleana: '.$booleana;
echo '<br><br>';


// variable de tipo arreglo
$arreglo = array("Ingrid", "Julieth");

echo $arreglo[1];
echo '<br><br>';

// variables tipo arreglo con propiedades
$colores = array("color1"=>"rojo", "color2"=>"azul");

echo $colores["color2"];
echo '<br><br>';


// variable de tipo objeto
$objeto = (object)["mueble1"=>"armario", "mueble2"=>"escritorio"];

echo $objeto->mueble2;
;?>