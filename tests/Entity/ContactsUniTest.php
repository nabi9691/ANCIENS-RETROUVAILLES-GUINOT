<?php

namespace App\Tests\Entity;

use App\Entity\Utilisateurs;
use App\Entity\Contacts;
//use App\Entity\Medias;

use DateTimeImmutable;

use PHPUnit\Framework\TestCase;

class ContactsUniTest extends TestCase
{
  public function testValide(): void {
      
    $dateTime = New DateTimeImmutable();
    $contacts = new Contacts();
        $utilisateurs = new Utilisateurs();
    
        $contacts
    ->setNom('Nom')
            ->setPrenom('prenom')
            ->setCivilite('civilite')
            
            ->setDate($dateTime)
                        ->setAdresse('adresse')
            ->setVilles('villes')
            ->setDepartements('Departements')
            ->setPays('Pays')
            ->setStatus('Status')
->setTelephone('telephone')
            ->setEmail('email')
            
            
            $this->assertTrue($utilisateurs->getFormation()==='Formation');
            $this->assertTrue($utilisateurs->getCivilite()==='civilite');
            $this->assertTrue($utilisateurs->getNom()==='nom');
            $this->assertTrue($utilisateurs->getPrenom()==='prenom');
                        $this->assertTrue($utilisateurs->getDateDeNaissance()===$dateTime);
    $this->assertTrue($utilisateurs->getAdresse()==='adresse'); 
    $this->assertTrue($utilisateurs->getVilles()==='villes'); 
    $this->assertTrue($utilisateurs->getTelephone()==='telephone'); 
    $this->assertTrue($utilisateurs->getEmail()==='email'); 
    $this->assertTrue($utilisateurs->getLogin()==='login'); 
    $this->assertTrue($utilisateurs->getPassword()==='password'); 
    }

  public function testVide(): void 
  {
      $dateTime = New DateTimeImmutable();
    
    $utilisateurs = New Utilisateurs(); 

    $this->assertEmpty($utilisateurs->getId());
    $this->assertEmpty($utilisateurs->getFormation());
    $this->assertEmpty($utilisateurs->getCivilite());
    $this->assertEmpty($utilisateurs->getNom());
    $this->assertEmpty($utilisateurs->getPrenom());
        $this->assertEmpty($utilisateurs->getDateDeNaissance());
        $this->assertEmpty($utilisateurs->getAdresse());
        $this->assertEmpty($utilisateurs->getVilles());
        $this->assertEmpty($utilisateurs->getTelephone());
        $this->assertEmpty($utilisateurs->getEmail());
        $this->assertEmpty($utilisateurs->getLogin());
        $this->assertEmpty($utilisateurs->getPassword());
        }

     public function testNouveauModifSupprAffMessages()
     {
        $utilisateurs = new Utilisateurs();
        $messages = new Messages();
        
$this->assertEmpty($utilisateurs->getMessageEnvoyer());
        $this->assertEmpty($utilisateurs->getMessageReçu());
        
        $utilisateurs->addMessageEnvoyer($messages);
        $utilisateurs->addMessageReU($messages);
        
        $this->assertContains($messages, $utilisateurs->getMessageEnvoyer());
        $this->assertContains($messages, $utilisateurs->getMessageReçu());
        
        $utilisateurs->removeMessageEnvoyer($messages);
        $utilisateurs->removeMessageReU($messages);
        
        $this->assertEmpty($utilisateurs->getMessageEnvoyer());
        $this->assertEmpty($utilisateurs->getMessageReçu());
        }
      
      public function testNouveauModifSupprAffMedias()
      {
        $utilisateurs = new Utilisateurs();
                $medias = new Medias();
     
                $this->assertEmpty($utilisateurs->getMedias());
    
        $utilisateurs->addMedia($medias);
        $this->assertContains($medias, $utilisateurs->getMedias());

        $utilisateurs->removeMedia($medias);
        $this->assertEmpty($utilisateurs->getMedias());
        }
  }
      