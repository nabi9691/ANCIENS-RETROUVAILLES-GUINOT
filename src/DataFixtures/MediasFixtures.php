<?php

namespace App\DataFixtures;

use App\Entity\Medias;
use App\Entity\Utilisateurs;

use Faker; 
use Faker\Factory;

use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Symfony\Component\Security\Core\Role\Role;
use Symfony\Component\Validator\Constraints\DateTime;

class MediasFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $faker = Faker\Factory::create('fr_FR');
        
        // Liste des médias :
        for ($i = 1; $i < 200; $i++) 
        {
            $medias = new Medias();
            $status = ['Perdu', 'Cassé', 'Endomagé', 'louer', 'Vendu', 'Voler', 'Emprinter'];
            shuffle($status);
            $categories = ['Romans', 'Polars', 'Livres pratiques', 'Art de vivre', 'Livres pour enfants', 'Littératures', 'Loisirs', 'Voyages', 'Cuisine', 'Bricolages', 'Décorations', 'Bandes dessinées','Comics', 'Mangas', 'Romans policiers', 'Romans d’espionnage', 'Dictionnaires', 'Encyclopédies', 'Bandes dessinées', 'Livres sur l’Histoire', 'Livres scientifiques', 'Techniques', 'Professionnels', 'Livres de science-fiction', 'Fantastiques', 'Héroics', 'Fantasys', 'Horreurs', 'Harlequin'];
            shuffle($categories);
            
$medias
            ->setImageName($faker->name)
            ->setContenu($faker->sentence())
            ->setDate(new \DateTime())
            ->setStatus($status[0])
            ->setCategories($categories[0])
->setAuteurs($faker->lastName);
            //->setUtilisateurs($utilisateurs);
            
                        $manager->persist($medias);
    
                        $manager->flush();  
    }
}
}
