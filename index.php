<?php
require_once __DIR__.'/vendor/autoload.php';

$app = new Silex\Application();
$app->get('/hello/{name}', function($name) use($app) {
return 'hello ' .$app->escape($name);
});

$app->get('/clima', function() use($app) {
    
    $arreglo = ['Nombre: Jonathan Carmona Medeguin' => 'Cuenta: 415061700'];
    return $app->json($arreglo);
});


$app->run();


