<?php

namespace App\Entity;

use App\Repository\TicketRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TicketRepository::class)]
class Ticket
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?bool $is_paid = null;

    #[ORM\Column]
    private ?bool $is_validated = null;

    #[ORM\Column(length: 10)]
    private ?string $numero_de_suivi = null;

    #[ORM\Column]
    private ?\DateTimeImmutable $created_at = null;

    #[ORM\Column(length: 255)]
    private ?string $nom_client = null;

    #[ORM\Column(length: 255)]
    private ?string $prenom_client = null;

    #[ORM\Column(length: 255)]
    private ?string $adresse_postale = null;

    #[ORM\Column(length: 255)]
    private ?string $tel_client = null;

    #[ORM\Column(length: 255)]
    private ?string $date_rdv = null;

    #[ORM\Column(length: 255)]
    private ?string $adresse_mail = null;

    #[ORM\Column(length: 255)]
    private ?string $plage_horaire = null;

    #[ORM\OneToOne(inversedBy: 'ticket', cascade: ['persist', 'remove'])]
    private ?Commande $id_paiement = null;

    public function __toString()
    {
        return $this->numero_de_suivi . " --  " . $this->nom_client;
    }

    public function __construct()
    {
       $this->created_at = new \DateTimeImmutable(); 
    }
    public function getId(): ?int
    {
        return $this->id;
    }

    public function isIsPaid(): ?bool
    {
        return $this->is_paid;
    }

    public function setIsPaid(bool $is_paid): self
    {
        $this->is_paid = $is_paid;

        return $this;
    }

    public function isIsValidated(): ?bool
    {
        return $this->is_validated;
    }

    public function setIsValidated(bool $is_validated): self
    {
        $this->is_validated = $is_validated;

        return $this;
    }

    public function getNumeroDeSuivi(): ?string
    {
        return $this->numero_de_suivi;
    }

    public function setNumeroDeSuivi(string $numero_de_suivi): self
    {
        $this->numero_de_suivi = $numero_de_suivi;

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

    public function getNomClient(): ?string
    {
        return $this->nom_client;
    }

    public function setNomClient(string $nom_client): self
    {
        $this->nom_client = $nom_client;

        return $this;
    }

    public function getPrenomClient(): ?string
    {
        return $this->prenom_client;
    }

    public function setPrenomClient(string $prenom_client): self
    {
        $this->prenom_client = $prenom_client;

        return $this;
    }

    public function getAdressePostale(): ?string
    {
        return $this->adresse_postale;
    }

    public function setAdressePostale(string $adresse_postale): self
    {
        $this->adresse_postale = $adresse_postale;

        return $this;
    }

    public function getTelClient(): ?string
    {
        return $this->tel_client;
    }

    public function setTelClient(string $tel_client): self
    {
        $this->tel_client = $tel_client;

        return $this;
    }

    public function getDateRdv(): ?string
    {
        return $this->date_rdv;
    }

    public function setDateRdv(string $date_rdv): self
    {
        $this->date_rdv = $date_rdv;

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

    public function getPlageHoraire(): ?string
    {
        return $this->plage_horaire;
    }

    public function setPlageHoraire(string $plage_horaire): self
    {
        $this->plage_horaire = $plage_horaire;

        return $this;
    }

    public function getIdPaiement(): ?Commande
    {
        return $this->id_paiement;
    }

    public function setIdPaiement(?Commande $id_paiement): self
    {
        $this->id_paiement = $id_paiement;

        return $this;
    }
}
