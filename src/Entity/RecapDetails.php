<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use App\Repository\RecapDetailsRepository;
use Symfony\Component\Serializer\Annotation\MaxDepth;
use ApiPlatform\Metadata\ApiResource;



#[ORM\Entity(repositoryClass: RecapDetailsRepository::class)]
#[ApiResource()]
class RecapDetails
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $quantite = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 7, scale: 2)]
    private ?string $prix = null;

    #[ORM\Column(length: 255)]
    private ?string $totalRecap = null;


    #[MaxDepth(1)]
    #[ORM\ManyToOne(inversedBy: 'recapDetails')]
private ?Commande $commande = null;

#[MaxDepth(1)]
#[ORM\ManyToOne(inversedBy: 'recapDetails')]
    private ?Formedeboxe $formedeboxe = null;


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getQuantite(): ?int
    {
        return $this->quantite;
    }

    public function setQuantite(int $quantite): static
    {
        $this->quantite = $quantite;

        return $this;
    }

    public function getPrix(): ?string
    {
        return $this->prix;
    }

    public function setPrix(string $prix): static
    {
        $this->prix = $prix;

        return $this;
    }

    public function getTotalRecap(): ?string
    {
        return $this->totalRecap;
    }

    public function setTotalRecap(string $totalRecap): static
    {
        $this->totalRecap = $totalRecap;

        return $this;
    }


    public function getCommande(): ?Commande
    {
        return $this->commande;
    }

    public function setCommande(?Commande $commande): static
    {
        $this->commande = $commande;

        return $this;
    }

    public function getFormedeboxe(): ?Formedeboxe
    {
        return $this->formedeboxe;
    }

    public function setFormedeboxe(?Formedeboxe $formedeboxe): static
    {
        $this->formedeboxe = $formedeboxe;

        return $this;
    }




}
