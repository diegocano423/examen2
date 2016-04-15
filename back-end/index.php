<?php
require("app/src/controllers/CreateController.php");
$metodo = $_SERVER['REQUEST_METHOD'];
if ($metodo == 'POST') {
    $listaDeParametrosEnElCuerpo = file_get_contents('php://input');;
    echo "es POST";
    $createController = new CreateController();
    $result = $createController->create($request);
}
if ($metodo == 'GET') {
    $listaDeParametrosEnElURL = $_GET;
    echo "es GET";
    $accion = $listaDeParametrosEnElURL['accion'];
    echo "\n la accion fue $accion";
}