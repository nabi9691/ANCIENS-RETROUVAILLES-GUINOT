<?php

namespace App\Tests\Entity;

use PHPUnit\Framework\TestCase;

use App\Entity\Messages;
use App\Entity\Utilisateurs;

use DateTimeImmutable;

class MessagesUniTest extends TestCase
{
    public function testValide(): void
    {
        $dateTime = New DateTimeImmutable();
 
        $messages = new Messages();

        $utilisateurs = new Utilisateurs();

        $messages
        ->setTitreMessage('Le titre du message')
        ->setContenuMessage('Le contenu du message')
                    ->setCreerDate($dateTime)
                    ->setSiMessageLu('Si le message est lu');
                    //->setExpediteur($expediteur)
            //->setDestinataire($destinataire);
            
            $this->assertTrue($messages->getTitreMessage()==='Titre du message');
            $this->assertTrue($messages->getContenuMessage()==='Contenu');
    $this->assertTrue($messages->getCreerDate()===$dateTime);
        $this->assertTrue($messages->getSiMessageLu()==='Si le message est lu');
        
    }

            public function testvide(): void
    {
        $dateTime = New DateTimeImmutable();
        $messages = new Messages();
        
        $this->assertEmpty($messages->getTitreMessage());
                $this->assertEmpty($messages->getCreerDate() );
        $this->assertEmpty($messages->getContenuMessage());
        $this->assertEmpty($messages->getSiMessageLu());
                 $this->assertEmpty($messages->getId());
         }

         public function testNouveauModifAffSuppUtilisateurs()
         {        
             
             $messages = new Messages();
             $utilisateurs = new Utilisateurs();
     
             $this->assertEmpty($messages->getExpediteur());
             $this->assertEmpty($messages->getDestinataire());
     
             $messages->addExpediteur($utilisateurs);
             $messages->addDestinataire($utilisateurs);
             
             $this->assertContains($utilisateurs, $messages->getExpediteur());
             $this->assertContains($utilisateurs, $messages->getDestinataire());
     
             $messages->removeExpediteur($utilisateurs);
             $messages->removeDestinataire($utilisateurs);
             
             $this->assertEmpty($messages->getExpediteur());
             $this->assertEmpty($messages->getDestinataire());
                }       
            
                public function testNouveauModifSupprAffMedias()
                {
                  $messages = new Messages();
                          $medias = new Medias();
               
                          $this->assertEmpty($messages->getMedias());
              
                  $messages->addMedia($medias);
                  $this->assertContains($medias, $messages->getMedias());
          
                  $messages->removeMedia($medias);
                  $this->assertEmpty($messages->getMedias());
                  }
            }    
            
            }    
            }
            
        