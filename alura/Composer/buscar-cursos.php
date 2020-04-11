<?php

require 'vendor/autoload.php';
require 'src/Buscador.php';

use Alura\BuscardorCursos\Buscador as Buscador;
use GuzzleHttp\Client;
use Symfony\Component\DomCrawler\Crawler;

$client = new Client([
    'verify' => false,
    'base_uri' => 'https://www.alura.com.br/'
]);
$crawler = new Crawler();
$buscador = new Buscador($client, $crawler);
$result = $buscador->buscar('/cursos-online-programacao/php');

foreach ($result as $curso) echo $curso.PHP_EOL;

