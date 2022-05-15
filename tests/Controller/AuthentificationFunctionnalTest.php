<?php

namespace App\Tests\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;


class AuthentificationFunctionnalTest extends WebTestCase
{
    public function testLogin(): void
    {
        $client = static::createClient();
        $crawler = $client->request('GET', 'login');

        $this->assertResponseIsSuccessful();
        //$this->assertResponseStatusCodeSame(Response::HTTP_OK);
  }

  public function testLogout(): void
  {
      $client = static::createClient();
      $crawler = $client->request('GET', 'logout');
              
      $this->assertResponseIsSuccessful();
      //$this->assertResponseStatusCodeSame(Response::HTTP_OK);
}



}