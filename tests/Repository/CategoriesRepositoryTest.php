<?php

namespace App\Tests\Repository;

use Liip\TestFixturesBundle\Test\FixturesTrait;
use App\DataFixtures\CategoriesFixtures;
use App\Repository\CategoriesRepository;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

class CategoriesRepositoryTest extends KernelTestCase
{
   // use FixturesTrait;
    
    public function testCalcul(): void
    {
        # Le besoin ici est de de recuperer mon Repo 
        # Pour cela, je  Lance le kermel afin d'avoir le noyau
        // $kernel = self::bootKernel();
            self::bootKernel();
           // $this->loadFixtures([CategoriesFixtures::class]);

        # Maintenant que j'ai le noyau je peux acceder au Container
         // $kermel->getContainer();
            $categories = self::$container->get(CategoriesRepository::class)->count([]);
            $this ->assertEquals(10, $categories);
    
        //$this->assertSame('test', $kernel->getEnvironment());
        //$routerService = self::$container->get('router');
        //$myCustomService = self::$container->get(CustomService::class);
    }
}