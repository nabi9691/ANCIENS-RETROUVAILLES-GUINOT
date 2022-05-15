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
     
             $utilisateurs->addExpediteur($expediteur);
             $utilisateurs->addDestinataire($destinataire);
             
             $this->assertContains($expediteur, $utilisateurs->getExpediteur());
             $this->assertContains($expediteur, $utilisateurs->getDestinataire());
     
             $utilisateurs->removeExpediteur($expediteur);
             $utilisateurs->removeDestinataire($destinataire);
             
             $this->assertEmpty($utilisateurs->getMessageEnvoyer());
             $this->assertEmpty($utilisateurs->getMessageReçu());
             $this->assertEmpty($utilisateurs->getMedias());
                }       
            }    
            }
            
        