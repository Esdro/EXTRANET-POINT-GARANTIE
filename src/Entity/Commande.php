<?php

namespace App\Entity;

use App\Repository\CommandeRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CommandeRepository::class)]
class Commande
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?\DateTimeImmutable $created_at = null;

    #[ORM\Column]
    private ?int $unique_id = null;

    #[ORM\Column]
    private ?bool $is_completed = null;

    #[ORM\Column(length: 255)]
    private ?string $nom_client = null;

    #[ORM\Column(length: 255)]
    private ?string $prenom_client = null;

    #[ORM\Column(length: 255)]
    private ?string $adresse_mail = null;

    #[ORM\OneToOne(mappedBy: 'id_paiement', cascade: ['persist', 'remove'])]
    private ?Ticket $ticket = null;

    public function __toString()
    {
        return $this->unique_id . "  -- " . $this->nom_client;
    }

    public function __construct()
    {
       $this->created_at = new \DateTimeImmutable(); 
    }
    public function getId(): ?int
    {
        return $this->id;
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

    public function getUniqueId(): ?int
    {
        return $this->unique_id;
    }

    public function setUniqueId(int $unique_id): self
    {
        $this->unique_id = $unique_id;

        return $this;
    }

    public function isIsCompleted(): ?bool
    {
        return $this->is_completed;
    }

    public function setIsCompleted(bool $is_completed): self
    {
        $this->is_completed = $is_completed;

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

    public function getAdresseMail(): ?string
    {
        return $this->adresse_mail;
    }

    public function setAdresseMail(string $adresse_mail): self
    {
        $this->adresse_mail = $adresse_mail;

        return $this;
    }

    public function getTicket(): ?Ticket
    {
        return $this->ticket;
    }

    public function setTicket(?Ticket $ticket): self
    {
        // unset the owning side of the relation if necessary
        if ($ticket === null && $this->ticket !== null) {
            $this->ticket->setIdPaiement(null);
        }

        // set the owning side of the relation if necessary
        if ($ticket !== null && $ticket->getIdPaiement() !== $this) {
            $ticket->setIdPaiement($this);
        }

        $this->ticket = $ticket;

        return $this;
    }
}
