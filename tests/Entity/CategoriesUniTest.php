<?php

namespace App\Tests\Entity;

use App\Entity\Categories;

use PHPUnit\Framework\TestCase;

class CategoriesUniTest extends TestCase
{
    public function testIsTrue()
    {
        $categories = new Categories();
        
        $categories
        ->setNom('Nom')
                   ->setResume('Resume');
                   
        $this->assertTrue($categories->getNom()==='Nom');
        $this->assertTrue($categories->getResume()==='Resume');
    }

    public function testIsEmpty()
    {
        $categories = new categories();
        
        $this->assertEmpty($categories->getNom());
        $this->assertEmpty($categories->getResume() );
        $this->assertEmpty($categories->getId());
    }

}