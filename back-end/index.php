<?php

/**
 * index.php
 * Inicia la aplicación y sirve como enrutador para el back-end.
 */

require "bootstrap.php";

//use App\Controllers\NoticiasController;
use Slim\Http\Request;
use Slim\Http\Response;

$app = new \Slim\App();

// Definimos nuestras rutas
$app->post(
    '/games/create',
    function ($request, $response) {
        $createController = new App\Controllers\CreateController();
        $result = $createController->create($request);
        
        return $response->withJson($result);
    }
);