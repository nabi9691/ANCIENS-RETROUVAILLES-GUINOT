<?php

namespace App\DataFixtures;

use App\Entity\Contacts;
//use App\Entity\Utilisateurs;

use Faker; 
use Faker\Factory;

use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Symfony\Component\Security\Core\Role\Role;
use Symfony\Component\Validator\Constraints\DateTime;

class ContactsFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $faker = Faker\Factory::create('fr_FR');
        
        // Liste des contacts :
        for ($i = 1; $i < 250; $i++) 
        {
            $contacts = new Contacts();
            $civilite = ["Femme", "Homme"];
            shuffle($civilite);
            $status = ['Nouveau Message', 'Ancien message', 'Message Privé', 'Message Annonyme', 'Message Archivé', 'Message Professionnel', 'Message Publicitaire'];
            shuffle($status);
            $pays = ['France', 'Espagne', 'Royaume-Uni', 'Italie', 'Allemagne', 'Russie', 'Nigeria', 'Danemark', 'Irlande', 'Argentine', ];
            shuffle($pays);
            $departements = ['Limousin', 'Bourg-en-Bresse', 'Rhône-Alpes', 'Picardie', 'Moulins', 'Auvergne', 'Alpes de Haute-Provence', 'Digne-les-Bains', 'Provence-Alpes-Côte d Azur', 'Hautes-Alpes', 'Provence-Alpes-Côte d Azur', 'Alpes-Maritimes', 'Nice', 'Provence-Alpes-Côte d Azur', 'Ardêche', 'Rhône-Alpes', 'Ardennes', 'Charleville-Mézières', 'Champagne-Ardenne', 'Ariège', 'Foix', 'Midi-Pyrénées', 'Troyes', 'Champagne-Ardenne', 'Aude', 'Carcassonne', 'Languedoc-Roussillon', 'Aveyron', 'Rodez', 'Midi-Pyrénées', 'Bouches-du-Rhône', 'Marseille', 'Provence-Alpes-Côte d Azur', 'Calvados', 'Basse-Normandie', 'Cantal', 'Aurillac', 'Auvergne'];
            shuffle($departements );
            
    
$email = $faker->email;

            $contacts
                            ->setNom($faker->lastName)
                ->setPrenom($faker->firstName)
        ->setDate(new \DateTime())
        ->setCivilite($civilite[0])
        ->setTelephone($faker->phoneNumber)
        ->setEmail($email)
        ->setFax($faker->phoneNumber)
            ->setAdresse($faker->address)
        ->setCodePostal($faker->postcode)
                                ->setVilles($faker->city)
                                ->setDepartements($departements[0])
                                ->setPays($faker->city)
                                ->setStatus($status[0]);
                                
                                
                                    
            $manager->persist($contacts);
    
    $manager->flush();  
    }
}     
}
