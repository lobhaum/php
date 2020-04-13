<?php

namespace Alura\BuscardorCursos;

use GuzzleHttp\ClientInterface;
use Symfony\Component\DomCrawler\Crawler;

class Buscador
{
    /**
     * @var ClientInterface
     */
    private $httpClient;
    /**
     * @var Crawler
     */
    private $crawler;

    /**
     * Buscador constructor.
     * @param ClientInterface $httpClient
     * @param Crawler $crawler
     */
    public function __construct(ClientInterface $httpClient, Crawler $crawler)
    {
        $this->httpClient = $httpClient;
        $this->crawler = $crawler;
    }

    public function buscar(string $url): array
    {
        $response = $this->httpClient->request('GET', $url);
        $html = $response->getBody();
        $this->crawler->addHtmlContent($html);
        $elements = $this->crawler->filter('span.card-curso__nome');
        $result = [];
        foreach ($elements as $element) {
            $result[] = $element->textContent;
        }
        return $result;
    }
}
