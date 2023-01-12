<?php

namespace App\Entity;

use App\Repository\MagasinRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: MagasinRepository::class)]
class Magasin
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 600)]
    private ?string $nom = null;

    #[ORM\Column(length: 255)]
    private ?string $image_src = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $description = null;

    #[ORM\Column(length: 400)]
    private ?string $code_postal = null;

    #[ORM\Column(length: 255)]
    private ?string $coord_lat = null;

    #[ORM\Column(length: 255)]
    private ?string $coord_lon = null;

    #[ORM\Column(length: 255)]
    private ?string $tel = null;

    #[ORM\Column(length: 255)]
    private ?string $adresse_mail = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $facebook = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $instagram = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $internet = null;

    #[ORM\Column]
    private ?\DateTimeImmutable $created_at = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function __toString()
    {
        return $this->nom . "  " . $this->code_postal;
    }

    public function __construct()
    {
       $this->created_at = new \DateTimeImmutable(); 
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

    public function getImageSrc(): ?string
    {
        return $this->image_src;
    }

    public function setImageSrc(string $image_src): self
    {
        $this->image_src = $image_src;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getCodePostal(): ?string
    {
        return $this->code_postal;
    }

    public function setCodePostal(string $code_postal): self
    {
        $this->code_postal = $code_postal;

        return $this;
    }

    public function getCoordLat(): ?string
    {
        return $this->coord_lat;
    }

    public function setCoordLat(string $coord_lat): self
    {
        $this->coord_lat = $coord_lat;

        return $this;
    }

    public function getCoordLon(): ?string
    {
        return $this->coord_lon;
    }

    public function setCoordLon(string $coord_lon): self
    {
        $this->coord_lon = $coord_lon;

        return $this;
    }

    public function getTel(): ?string
    {
        return $this->tel;
    }

    public function setTel(string $tel): self
    {
        $this->tel = $tel;

        return $this;
    }

    public function getAdresseMail(): ?string
    {
        return $this->adresse_mail;
    }

    public function setAdresseMail(string $adresse_mail): self
    {
        $this->adresse_mail = $adresse_mail;

        return $this;
    }

    public function getFacebook(): ?string
    {
        return $this->facebook;
    }

    public function setFacebook(?string $facebook): self
    {
        $this->facebook = $facebook;

        return $this;
    }

    public function getInstagram(): ?string
    {
        return $this->instagram;
    }

    public function setInstagram(?string $instagram): self
    {
        $this->instagram = $instagram;

        return $this;
    }

    public function getInternet(): ?string
    {
        return $this->internet;
    }

    public function setInternet(?string $internet): self
    {
        $this->internet = $internet;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeImmutable
    {
        return $this->created_at;
    }

    public function setCreatedAt(\DateTimeImmutable $created_at): self
    {
        $this->created_at = $created_at;

        return $this;
    }
}
