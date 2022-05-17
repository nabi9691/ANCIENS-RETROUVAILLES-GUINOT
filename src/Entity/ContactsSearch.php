<?php

namespace App\Entity;

//use App\Repository\ContactsSearchRepository;
use Doctrine\ORM\Mapping as ORM;

class ContactsSearch
{
    
    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Contacts")
          */
    private $contacts;

    public function getContacts(): ?Contacts
    {
        return $this->contacts;
    }

    public function setContacts(?Contacts $contacts): self
    {
        $this->contacts = $contacts;

        return $this;
    }
}
