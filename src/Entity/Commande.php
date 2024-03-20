<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use App\Repository\CommandeRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use App\Entity\Adresse;
use App\Entity\Users;


#[ORM\Entity(repositoryClass: CommandeRepository::class)]
#[ApiResource()]
class Commande
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?bool $isPaid = null;

    #[ORM\Column(length: 255)]
    private ?string $methode = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $stripeSessionId = null;

    #[ORM\Column(length: 255)]
    private ?string $reference = null;

    #[ORM\Column(nullable: true)]
private ?\DateTimeImmutable $created_at = null;


    #[ORM\Column]
    private ?int $total = null;

    #[ORM\OneToOne(cascade: ['persist', 'remove'])]
    private ?Formedeboxe $formedeboxe = null;

    #[ORM\OneToMany(mappedBy: 'commande', targetEntity: RecapDetails::class, cascade: ['persist', 'remove'], orphanRemoval:true)]
    private ?Collection $recapDetails = null;

    #[ORM\ManyToOne(inversedBy: 'commandes')]
    private ?Users $user = null;

    #[ORM\ManyToOne(inversedBy: 'adresses')]
    private Adresse $adresse;

    public function __construct()
    {
        $this->recapDetails = new ArrayCollection();
    }
    

    public function getId(): ?int
    {
        return $this->id;
    }

    public function isIsPaid(): ?bool
    {
        return $this->isPaid;
    }

    public function setIsPaid(bool $isPaid): static
    {
        $this->isPaid = $isPaid;

        return $this;
    }

    public function getMethode(): ?string
    {
        return $this->methode;
    }

    public function setMethode(string $methode): static
    {
        $this->methode = $methode;

        return $this;
    }

    public function getStripeSessionId(): ?string
    {
        return $this->stripeSessionId;
    }

    public function setStripeSessionId(string $stripeSessionId): static
    {
        $this->stripeSessionId = $stripeSessionId;

        return $this;
    }

    public function getReference(): ?string
    {
        return $this->reference;
    }

    public function setReference(string $reference): static
    {
        $this->reference = $reference;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeImmutable
    {
        return $this->created_at;
    }

    public function setCreatedAt(\DateTimeImmutable $created_at): static
    {
        $this->created_at = $created_at;

        return $this;
    }




    public function getTotal(): ?int
    {
        return $this->total;
    }

    public function setTotal(int $total): static
    {
        $this->total = $total;

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

   /**
     * @return Collection|RecapDetails[]
     */
    public function getRecapDetails(): Collection
    {
        return $this->recapDetails;
    }

    public function addRecapDetail(RecapDetails $recapDetail): self
    {
        if (!$this->recapDetails->contains($recapDetail)) {
            $this->recapDetails[] = $recapDetail;
            $recapDetail->setCommande($this);
        }

        return $this;
    }

    public function removeRecapDetail(RecapDetails $recapDetail): self
    {
        if ($this->recapDetails->removeElement($recapDetail)) {
            // set the owning side to null (unless already changed)
            if ($recapDetail->getCommande() === $this) {
                $recapDetail->setCommande(null);
            }
        }

        return $this;
    }
     /**
     * @return Users|null
     */
    public function getUser(): ?Users
    {
        return $this->user;
    }

    /**
     * @param Users|null $user
     *
     * @return $this
     */
    public function setUser(?Users $user): static
    {
        $this->user = $user;

        return $this;
    }
    public function getAdresse(): Adresse
    {
        return $this->adresse;
    }

    public function setAdresse(Adresse $adresse): static
    {
        $this->adresse = $adresse;

        return $this;
    }
}