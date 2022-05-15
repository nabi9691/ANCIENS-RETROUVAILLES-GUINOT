<?php

namespace App\DataFixtures;

use App\Entity\Messages;
use App\Entity\Utilisateurs;

use Faker; 
use Faker\Factory;

use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Symfony\Component\Security\Core\Role\Role;
use Symfony\Component\Validator\Constraints\DateTime;

class MessagesFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $faker = Faker\Factory::create('fr_FR');
        
        // Liste des messages :
        for ($i = 1; $i < 120; $i++) 
        {
            $messages = new Messages();
            
$email = $faker->email;

            $messages
            ->setTitreMessage($faker->name)
            ->setContenuMessage($faker->sentence())
            ->setCreerDate(new \DateTime())
            ->setSiMessageLu($faker->sentence());
            //->setExpediteur($expediteur)
            //->setDestinataire($destinataire);
                
            $manager->persist($messages);
         
       $manager->flush();  
    }
    }     
}
