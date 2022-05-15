<?php

namespace App\Tests\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;


class RegistrationFunctionnalTest extends WebTestCase
{
    
  public function testRegister(): void
    {
        $client = static::createClient();
        $crawler = $client->request('GET', 'register');

        $this->assertResponseIsSuccessful();
        //$this->assertResponseStatusCodeSame(Response::HTTP_OK);
  }

  public function testRegister_admin(): void
  {
      $client = static::createClient();
      $crawler = $client->request('GET', 'register-admin');
              
      $this->assertResponseIsSuccessful();
      //$this->assertResponseStatusCodeSame(Response::HTTP_OK);
}

public function testRegister_abonner(): void
{
    $client = static::createClient();
    $crawler = $client->request('GET', 'register-abonner');
            
    $this->assertResponseIsSuccessful();
    //$this->assertResponseStatusCodeSame(Response::HTTP_OK);
}

public function testVerify(): void
  {
      $client = static::createClient();
      $crawler = $client->request('GET', 'verify');
              
      $this->assertResponseIsSuccessful();
      //$this->assertResponseStatusCodeSame(Response::HTTP_OK);
}





}