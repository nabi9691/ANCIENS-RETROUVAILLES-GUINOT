<?php

namespace App\Tests\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;


class UtilisateursFunctionnalTest extends WebTestCase
{
    public function testIndex(): void
    {
        $client = static::createClient();
        $crawler = $client->request('GET', '/utilisateurs');

        $this->assertResponseIsSuccessful();
        //$this->assertResponseStatusCodeSame(Response::HTTP_OK);
  }

  public function testFormulaireUtilisateur(): void
    {
        $client = static::createClient();
        $crawler = $client->request('GET', 'formulaireUtilisateur');
                
        $this->assertResponseIsSuccessful();
        //$this->assertResponseStatusCodeSame(Response::HTTP_OK);
  }

  public function testNouvelUtilisateur(): void
    {
        $client = static::createClient();
        $crawler = $client->request('GET', 'nouvelUtilisateur');
                
        $this->assertResponseIsSuccessful();
        //$this->assertResponseStatusCodeSame(Response::HTTP_OK);
  }
 
  public function testAfficherUtilisateur(): void
    {
        $client = static::createClient();
        $crawler = $client->request('GET', 'afficherUtilisateur ');
                
        $this->assertResponseIsSuccessful();
        //$this->assertResponseStatusCodeSame(Response::HTTP_OK);
  }
  
  public function testmodifierUtilisateur(): void
    {
        $client = static::createClient();
        $crawler = $client->request('GET', 'modifierUtilisateur');
                
        $this->assertResponseIsSuccessful();
        //$this->assertResponseStatusCodeSame(Response::HTTP_OK);
  }

  public function testsupprimerUtilisateur(): void
    {
        $client = static::createClient();
        $crawler = $client->request('GET', 'supprimerUtilisateur');
                
        $this->assertResponseIsSuccessful();
        //$this->assertResponseStatusCodeSame(Response::HTTP_OK);
  }

  public function testAbonner(): void
    {
        $client = static::createClient();
        $crawler = $client->request('GET', 'abonner');
                
        $this->assertResponseIsSuccessful();
        //$this->assertResponseStatusCodeSame(Response::HTTP_OK);
  }

  public function testEspacePersonnel(): void
  {
      $client = static::createClient();
      $crawler = $client->request('GET', 'espacePersonnel');
              
      $this->assertResponseIsSuccessful();
      //$this->assertResponseStatusCodeSame(Response::HTTP_OK);
}



}
