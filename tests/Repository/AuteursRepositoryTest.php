<?php

namespace App\Tests\Repository;

use Liip\TestFixturesBundle\Test\FixturesTrait;
use App\DataFixtures\AuteursFixtures;
use App\Repository\AuteursRepository;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

class AuteursRepositoryTest extends KernelTestCase
{
   // use FixturesTrait;
    
    public function testCalcul(): void
    {
        # Le besoin ici est de de recuperer mon Repo 
        # Pour cela, je  Lance le kermel afin d'avoir le noyau
        // $kernel = self::bootKernel();
            self::bootKernel();
           // $this->loadFixtures([AuteursFixtures::class]);

        # Maintenant que j'ai le noyau je peux acceder au Container
         // $kermel->getContainer();
            $auteurs = self::$container->get(AuteursRepository::class)->count([]);
            $this ->assertEquals(10, $auteurs);
    
        //$this->assertSame('test', $kernel->getEnvironment());
        //$routerService = self::$container->get('router');
        //$myCustomService = self::$container->get(CustomService::class);
    }
}