<?php

namespace App\Entity;

// use App\Repository\PropertySearchRepository;
// use Doctrine\ORM\Mapping as ORM;

class PropertySearch
{
    private $titre;

    public function getTitre(): ?string
    {
        return $this->titre;
    }

    public function setTitre(string $titre): self
    {
        $this->titre = $titre;

        return $this;
    }
}
