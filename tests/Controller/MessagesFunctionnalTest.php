<?php

namespace App\Tests\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class MessagesFunctionnalTest extends WebTestCase
{
    public function testIndex(): void
    {
        $client = static::createClient();
        $crawler = $client->request('GET', '/messages');

        $this->assertResponseIsSuccessful();
        //$this->assertResponseStatusCodeSame(Response::HTTP_OK);
  }

  public function testFormulaireMessage(): void
    {
        $client = static::createClient();
        $crawler = $client->request('GET', 'formulaireMessage');
                
        $this->assertResponseIsSuccessful();
        //$this->assertResponseStatusCodeSame(Response::HTTP_OK);
  }

  public function testNouveauMessage(): void
    {
        $client = static::createClient();
        $crawler = $client->request('GET', 'nouveauMessage');
                
        $this->assertResponseIsSuccessful();
        //$this->assertResponseStatusCodeSame(Response::HTTP_OK);
  }
 
  public function testAfficherMessage(): void
    {
        $client = static::createClient();
        $crawler = $client->request('GET', 'afficherMessage');
                
        $this->assertResponseIsSuccessful();
        //$this->assertResponseStatusCodeSame(Response::HTTP_OK);
  }
  
  public function testmodifierMessage(): void
    {
        $client = static::createClient();
        $crawler = $client->request('GET', 'modifierMessage');
                
        $this->assertResponseIsSuccessful();
        //$this->assertResponseStatusCodeSame(Response::HTTP_OK);
  }

  public function testsupprimerMessage(): void
    {
        $client = static::createClient();
        $crawler = $client->request('GET', 'supprimerMessage');
                
        $this->assertResponseIsSuccessful();
        //$this->assertResponseStatusCodeSame(Response::HTTP_OK);
  }

public function testMessagesEnvoyer(): void
{
    $client = static::createClient();
    $crawler = $client->request('GET', 'messagesEnvoyer');
            
    $this->assertResponseIsSuccessful();
    //$this->assertResponseStatusCodeSame(Response::HTTP_OK);
}

public function testMessagesRecu(): void
  {
      $client = static::createClient();
      $crawler = $client->request('GET', 'messagesRecu');
              
      $this->assertResponseIsSuccessful();
      //$this->assertResponseStatusCodeSame(Response::HTTP_OK);
}

public function testListeMessagesEnvoyer(): void
{
    $client = static::createClient();
    $crawler = $client->request('GET', 'listeMessagesEnvoyer');
            
    $this->assertResponseIsSuccessful();
    //$this->assertResponseStatusCodeSame(Response::HTTP_OK);
}

public function testMessagesLu(): void
  {
      $client = static::createClient();
      $crawler = $client->request('GET', 'messagesLu');
              
      $this->assertResponseIsSuccessful();
      //$this->assertResponseStatusCodeSame(Response::HTTP_OK);
}


}