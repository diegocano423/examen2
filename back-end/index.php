<?php
$metodo = $_SERVER['REQUEST_METHOD'];
if ($metodo == 'POST') {
    $listaDeParametrosEnElCuerpo = file_get_contents('php://input');;
    echo "es POST";
    var_dump($listaDeParametrosEnElCuerpo);
}
if ($metodo == 'GET') {
    $listaDeParametrosEnElURL = $_GET;
    echo "es GET";
    $accion = $listaDeParametrosEnElURL['accion'];
    echo "\n la accion fue $accion";
}