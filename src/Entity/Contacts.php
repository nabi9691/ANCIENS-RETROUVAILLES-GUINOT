<?php

namespace App\Entity;

use App\Repository\ContactsRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

use Symfony\Component\Serializer\Annotation\Groups;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * @ORM\Entity(repositoryClass=ContactsRepository::class)
 * @UniqueEntity("nom")
 */
class Contacts
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     * @Groups({"messages:api"})
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
    * @Assert\Length(
     *      min = 2,
     *      max = 50,
     *      minMessage = "Le nom doit avoir 1 minimum de {{ limit }} characteres long",
     *      maxMessage = "Votre Nom ne doit pas depasser {{ limit }} characteres")
     * @Groups({"messages:api"})
      */
    private $nom;

    /**
     * @ORM\Column(type="string", length=255)
    * @Assert\Length(
     *      min = 2,
     *      max = 50,
     *      minMessage = "Le prenom doit avoir 1 minimum de {{ limit }} characteres long",
     *      maxMessage = "Votre Prenom ne doit pas depasser {{ limit }} characteres")
      */
      private $prenom;

/**
     * @ORM\Column(type="string", length=255)
     * @Assert\Length(
     *      min = 10,
     *      max = 50,
     *      minMessage = "Le resumé doit avoir 1 minimum de {{ limit }} characteres long",
     *      maxMessage = "Votre resumé ne doit pas depasser {{ limit }} characteres")
     */
    private $resume;

    /**
     * @ORM\Column(type="date")
     */
    private $date;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $civilite;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $telephone;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $email;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $fax;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $adresse;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $codePostal;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $villes;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $departements;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $pays;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $status;

    /**
     * @ORM\ManyToOne(targetEntity=Utilisateurs::class, inversedBy="contacts")
     */
    private $utilisateurs;

    
    /**
     * @ORM\OneToMany(targetEntity=Messages::class, mappedBy="contacts")
     */
    private $messages;

    public function __construct()
    {
        //$this->contactsSearch = new ArrayCollection();
        //$this->messages = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getResume(): ?string
    {
        return $this->resume;
    }

    public function setResume(string $resume): self
    {
        $this->resume = $resume;

        return $this;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
    }

    public function getCivilite(): ?string
    {
        return $this->civilite;
    }

    public function setCivilite(string $civilite): self
    {
        $this->civilite = $civilite;

        return $this;
    }

    public function getTelephone(): ?string
    {
        return $this->telephone;
    }

    public function setTelephone(string $telephone): self
    {
        $this->telephone = $telephone;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getFax(): ?string
    {
        return $this->fax;
    }

    public function setFax(string $fax): self
    {
        $this->fax = $fax;

        return $this;
    }

    public function getAdresse(): ?string
    {
        return $this->adresse;
    }

    public function setAdresse(string $adresse): self
    {
        $this->adresse = $adresse;

        return $this;
    }

    public function getCodePostal(): ?string
    {
        return $this->codePostal;
    }

    public function setCodePostal(string $codePostal): self
    {
        $this->codePostal = $codePostal;

        return $this;
    }

    public function getVilles(): ?string
    {
        return $this->villes;
    }

    public function setVilles(string $villes): self
    {
        $this->villes = $villes;

        return $this;
    }

    public function getDepartements(): ?string
    {
        return $this->departements;
    }

    public function setDepartements(string $departements): self
    {
        $this->departements = $departements;

        return $this;
    }

    public function getPays(): ?string
    {
        return $this->pays;
    }

    public function setPays(string $pays): self
    {
        $this->pays = $pays;

        return $this;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(string $status): self
    {
        $this->status = $status;

        return $this;
    }

    public function getUtilisateurs(): ?Utilisateurs
    {
        return $this->utilisateurs;
    }

    public function setUtilisateurs(?Utilisateurs $utilisateurs): self
    {
        $this->utilisateurs = $utilisateurs;

        return $this;
    }

    /**
     * @return Collection<int, ContactsSearch>
     */
    
    /**
     * @return Collection<int, Messages>
     */
    public function getMessages(): Collection
    {
        return $this->messages;
    }

    public function addMessage(Messages $message): self
    {
        if (!$this->messages->contains($message)) {
            $this->messages[] = $message;
            $message->setContacts($this);
        }

        return $this;
    }

    public function removeMessage(Messages $message): self
    {
        if ($this->messages->removeElement($message)) {
            // set the owning side to null (unless already changed)
            if ($message->getContacts() === $this) {
                $message->setContacts(null);
            }
        }

        return $this;
    }

    public function __toString() {
        return $this->nom;
    }



}
