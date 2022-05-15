<?php

namespace App\Tests\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;


class ContactsFunctionnalTest extends WebTestCase
{
    public function testIndex(): void
    {
        $client = static::createClient();
        $crawler = $client->request('GET', '/contacts');

        $this->assertResponseIsSuccessful();
        //$this->assertResponseStatusCodeSame(Response::HTTP_OK);
  }

  public function testFormulaireContacts(): void
    {
        $client = static::createClient();
        $crawler = $client->request('GET', 'formulaireContacts');
                
        $this->assertResponseIsSuccessful();
        //$this->assertResponseStatusCodeSame(Response::HTTP_OK);
  }

  public function testNouveauContacts(): void
    {
        $client = static::createClient();
        $crawler = $client->request('GET', 'nouveauContacts');
                
        $this->assertResponseIsSuccessful();
        //$this->assertResponseStatusCodeSame(Response::HTTP_OK);
  }
 
  public function testAfficherContacts(): void
    {
        $client = static::createClient();
        $crawler = $client->request('GET', 'afficherContacts');
                
        $this->assertResponseIsSuccessful();
        //$this->assertResponseStatusCodeSame(Response::HTTP_OK);
  }
  
  public function testmodifierContacts(): void
    {
        $client = static::createClient();
        $crawler = $client->request('GET', 'modifierContacts');
                
        $this->assertResponseIsSuccessful();
        //$this->assertResponseStatusCodeSame(Response::HTTP_OK);
  }

  public function testsupprimerContacts(): void
    {
        $client = static::createClient();
        $crawler = $client->request('GET', 'supprimerContacts');
                
        $this->assertResponseIsSuccessful();
        //$this->assertResponseStatusCodeSame(Response::HTTP_OK);
  }

}