<?php

namespace App\Tests\Repository;

use Liip\TestFixturesBundle\Test\FixturesTrait;
use App\DataFixtures\MessagesFixtures;
use App\Repository\MessagesRepository;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

class MessagesRepositoryTest extends KernelTestCase
{
   // use FixturesTrait;
    
    public function testCalcul(): void
    {
        # Le besoin ici est de de recuperer mon Repo 
        # Pour cela, je  Lance le kermel afin d'avoir le noyau
        // $kernel = self::bootKernel();
            self::bootKernel();
           // $this->loadFixtures([MessagesFixtures::class]);

        # Maintenant que j'ai le noyau je peux acceder au Container
         // $kermel->getContainer();
            $messages = self::$container->get(MessagesRepository::class)->count([]);
            $this ->assertEquals(10, $messages);
    
        //$this->assertSame('test', $kernel->getEnvironment());
        //$routerService = self::$container->get('router');
        //$myCustomService = self::$container->get(CustomService::class);
    }
}