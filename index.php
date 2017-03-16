<?php
require_once __DIR__.'/vendor/autoload.php';
use GuzzleHttp\Client;
use Symfony\Component\HttpFoundation\Response;

$api_key = getenv('WEATHER_API');
$app = new Silex\Application();


$app->get('/clima', function() use($app,$api_key) {
    

$client = new Client();

$url = 'http://api.openweathermap.org/data/2.5/weather?id=3529612&appid='.$api_key.'&units=metric';
$response = $client->get($url);
$body = $response->getBody();
return new Response($body,200,array('Content-Type' => 'application/json'));
});

 
 $app->run();



