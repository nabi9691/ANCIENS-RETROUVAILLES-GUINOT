<?php

namespace App\Tests\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;


class MediasFunctionnalTest extends WebTestCase
{
    public function testIndex(): void
    {
        $client = static::createClient();
        $crawler = $client->request('GET', '/medias');

        $this->assertResponseIsSuccessful();
        //$this->assertResponseStatusCodeSame(Response::HTTP_OK);
  }

  public function testFormulaireMedias(): void
    {
        $client = static::createClient();
        $crawler = $client->request('GET', 'formulaireMedias');
                
        $this->assertResponseIsSuccessful();
        //$this->assertResponseStatusCodeSame(Response::HTTP_OK);
  }

  public function testNouveauMedias(): void
    {
        $client = static::createClient();
        $crawler = $client->request('GET', 'nouveauMedias');
                
        $this->assertResponseIsSuccessful();
        //$this->assertResponseStatusCodeSame(Response::HTTP_OK);
  }
 
  public function testAfficherMedias(): void
    {
        $client = static::createClient();
        $crawler = $client->request('GET', 'afficherMedias');
                
        $this->assertResponseIsSuccessful();
        //$this->assertResponseStatusCodeSame(Response::HTTP_OK);
  }
  
  public function testmodifierMedias(): void
    {
        $client = static::createClient();
        $crawler = $client->request('GET', 'modifierMedias');
                
        $this->assertResponseIsSuccessful();
        //$this->assertResponseStatusCodeSame(Response::HTTP_OK);
  }

  public function testsupprimerMedias(): void
    {
        $client = static::createClient();
        $crawler = $client->request('GET', 'supprimerMedias');
                
        $this->assertResponseIsSuccessful();
        //$this->assertResponseStatusCodeSame(Response::HTTP_OK);
  }

  public function testPageAccueilGuinot(): void
  {
      $client = static::createClient();
      $crawler = $client->request('GET', 'pageAccueilGuinot');
              
      $this->assertResponseIsSuccessful();
      //$this->assertResponseStatusCodeSame(Response::HTTP_OK);
}

public function testMotDuPresidentDeGuinot(): void
{
    $client = static::createClient();
    $crawler = $client->request('GET', 'motDuPresidentDeGuinot');
            
    $this->assertResponseIsSuccessful();
    //$this->assertResponseStatusCodeSame(Response::HTTP_OK);
}

public function testHistoriqueDeGuinot(): void
  {
      $client = static::createClient();
      $crawler = $client->request('GET', 'historiqueDeGuinot');
              
      $this->assertResponseIsSuccessful();
      //$this->assertResponseStatusCodeSame(Response::HTTP_OK);
}

public function testIntroductionSurGuinot(): void
{
    $client = static::createClient();
    $crawler = $client->request('GET', 'introductionSurGuinot');
            
    $this->assertResponseIsSuccessful();
    //$this->assertResponseStatusCodeSame(Response::HTTP_OK);
}

public function testFormationMasseurGuinot(): void
  {
      $client = static::createClient();
      $crawler = $client->request('GET', 'formationMasseurGuinot');
              
      $this->assertResponseIsSuccessful();
      //$this->assertResponseStatusCodeSame(Response::HTTP_OK);
}

public function testFormationGuinot(): void
{
    $client = static::createClient();
    $crawler = $client->request('GET', 'formationGuinot');
            
    $this->assertResponseIsSuccessful();
    //$this->assertResponseStatusCodeSame(Response::HTTP_OK);
}

public function testFormationDeveloppeurGuinot(): void
  {
      $client = static::createClient();
      $crawler = $client->request('GET', 'formationDeveloppeurGuinot');
              
      $this->assertResponseIsSuccessful();
      //$this->assertResponseStatusCodeSame(Response::HTTP_OK);
}

public function testFormationConseillerGuinot(): void
{
    $client = static::createClient();
    $crawler = $client->request('GET', 'formationConseillerGuinot');
            
    $this->assertResponseIsSuccessful();
    //$this->assertResponseStatusCodeSame(Response::HTTP_OK);
}

public function testTemoignages(): void
  {
      $client = static::createClient();
      $crawler = $client->request('GET', 'temoignages');
              
      $this->assertResponseIsSuccessful();
      //$this->assertResponseStatusCodeSame(Response::HTTP_OK);
}



}