<?php

require 'vendor/autoload.php';
use GuzzleHttp\Client;
use Symfony\Component\DomCrawler\Crawler;

$client = new Client(['verify' => false]);
$response = $client->request('GET','https://www.alura.com.br/cursos-online-programacao/php');

$html = $response->getBody();

$crawler = new Crawler();
$crawler->addHtmlContent($html);
$result = $crawler->filter('span.card-curso__nome');

foreach ($result as $curso) echo $curso->textContent.PHP_EOL;

