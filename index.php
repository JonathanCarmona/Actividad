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

$client = new GuzzleHttp\Client([
'base_url' => 'http://openweathermap.org/current',
'timeout' => 2.0,
]);
$id = 3515062;
$res = $client->request('GET', 'http://api.openweathermap.org/data/2.5/weather?id='. $id .'&APPID=258a11d1c99a32c8451688e82b7c893e', [

   
]);
return $res->getBody();

$app->run();


