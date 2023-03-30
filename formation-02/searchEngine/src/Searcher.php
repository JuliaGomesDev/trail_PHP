<?php

use Alura\SearchEngine;
use GuzzleHttp\ClientInterface;
use Symfony\Component\DomCrawler\Crawler;

use function PHPSTORM_META\elementType;

class Searcher {

  private ClientInterface $httpClient;  
  private Crawler $crawler;

  public function __construct(ClientInterface $httpClient, Crawler $crawler) 
  {
    $this->httpClient = $httpClient;
    $this->crawler = $crawler;
  }

  public function search(string $url) : array 
  {
    $response = $this->httpClient->request('GET', $url);

    $html = $response->getBody();
    $this->crawler->addHtmlContent($html);

    $elementCourses = $this->crawler->filter('span.card-curso__nome');
    $courses = [];

    foreach ($elementCourses as $element) 
    {
      $courses[] = $element->textContent;    
    }

    return $courses;
  }

}

?>