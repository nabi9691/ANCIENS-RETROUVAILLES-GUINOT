<?php

namespace App\Tests\Entity;

use PHPUnit\Framework\TestCase;
use App\Entity\Auteurs;

class AuteursUniTest extends TestCase
{
    public function testAuteursValid(): void
    {

        $auteurs = new Auteurs();
        
        $auteurs
        ->setNom('nom')
                ->setPrenom('prenom')
                ->setContenu('contenu')
                ->setEmail('nabi@gmail.com');
                     
        $this->assertTrue($auteurs->getNom()==='nom');
        $this->assertTrue($auteurs->getPrenom()==='prenom');
        $this->assertTrue($auteurs->getContenu()==='contenu');
        $this->assertTrue($auteurs->getEmail()==='nabi.gmail.com');
    }

    public function testAuteursVide(): void
    {
        $auteurs = new Auteurs();
        
         $this->assertEmpty($auteurs->getNom());
        $this->assertEmpty($auteurs->getPrenom());
        $this->assertEmpty($auteurs->getContenu());
        $this->assertEmpty($auteurs->getEmail());
        $this->assertEmpty($auteurs->getId());  
    }

       }
