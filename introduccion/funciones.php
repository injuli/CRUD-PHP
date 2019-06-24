<?php

// funciones sin parámetros
function bienvenida() {
    echo "Bienvenido al curso de PHP";
}

bienvenida();
echo '<br><br>';

// funciones con parámetros
function saludar($hola) {
    echo $hola;
}

saludar('Hola a todos!');
echo '<br><br>';
// funciones con retorno
function retorno($retornar) {
    return $retornar;
}

echo retorno("Retornando la función.");
?>