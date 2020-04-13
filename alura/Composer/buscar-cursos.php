<?php

require 'vendor/autoload.php';

use Alura\BuscardorCursos\Buscador;
use GuzzleHttp\Client;
use Symfony\Component\DomCrawler\Crawler;

$client = new Client([
    'verify' => false,
    'base_uri' => 'https://www.alura.com.br/'
]);
$crawler = new Crawler();
$searcher = new Buscador($client, $crawler);
$result = $searcher->buscar('cursos-online-programacao/php');

foreach ($result as $course) echo $course . PHP_EOL;

