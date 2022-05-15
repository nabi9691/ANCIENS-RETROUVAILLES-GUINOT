<?php

namespace App\Entity;

use App\Repository\MediasRepository;
use DateTime;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\Annotation as Vich;

/**
 * @ORM\Entity(repositoryClass=MediasRepository::class)
 * @Vich\Uploadable
 */
class Medias
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
          */
    private $imageName;

     /**
      * @Vich\UploadableField(mapping="document_images", fileNameProperty="imageName")
          * @ORM\JoinColumn(nullable=false)
*/
    private $imageFile;

/**
     * @ORM\Column(type="string", length=255)
     */
    private $contenu;

/**
     * @ORM\Column(type="datetime")
     */
    private $date;

/**
     * @ORM\Column(type="string", length=255)
     */
    private $status;

/**
     * @ORM\Column(type="string", length=255)
     */
    private $categories;

/**
     * @ORM\Column(type="string", length=255)
     */
    private $auteurs;

    /**
     * @ORM\ManyToOne(targetEntity=Utilisateurs::class, inversedBy="medias")
     */
    private $utilisateurs;


    public function __construct(){
        $this->date = new \DateTime();
    }


    public function getId(): ?int
    {
        return $this->id;
    }


    public function getContenu(): ?string
    {
        return $this->contenu;
    }

    public function setContenu(string $contenu): self
    {
        $this->contenu = $contenu;

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

    public function getImageName(): ?string
    {
        return $this->imageName;
    }

    public function setImageName(string $imageName): self
    {
        $this->imageName = $imageName;

        return $this;
    }

    public function setImageFile(File $image = null)
    {
        $this->imageFile = $image;

        if ($image) {
            $this->update_at = new \DateTime('now');
        }
    }

    public function getImageFile()
    {
        return $this->imageFile;
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

    public function getCategories(): ?string
    {
        return $this->categories;
    }

    public function setCategories(string $categories): self
    {
        $this->categories = $categories;

        return $this;
    }

    public function getAuteurs(): ?string
    {
        return $this->auteurs;
    }

    public function setAuteurs(string $auteurs): self
    {
        $this->auteurs = $auteurs;

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


    
       }

