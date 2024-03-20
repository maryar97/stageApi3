<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use App\Repository\AdresseRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use App\Entity\Commande;
use App\Entity\Users;


#[ORM\Entity(repositoryClass: AdresseRepository::class)]
#[ApiResource()]
class Adresse
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $Adresse = null;

    #[ORM\Column(length: 10)]
    private ?string $Adrcp = null;

    #[ORM\Column(length: 255)]
    private ?string $Adrville = null;

    #[ORM\Column(length: 255)]
    private ?string $Adrpays = null;

    #[ORM\ManyToMany(targetEntity: Users::class, inversedBy: 'adresses')]
    private Collection $users;

    public function __construct()
    {
        $this->users = new ArrayCollection();
    }

    


public function __toString(): string
{
    return $this->getAdresse() . ', ' . $this->getAdrCp() . ' ' . $this->getAdrVille();
}

    


    public function getId(): ?int
    {
        return $this->id;
    }



    public function getAdresse(): ?string
    {
        return $this->Adresse;
    }

    public function setAdresse(string $Adresse): static
    {
        $this->Adresse = $Adresse;

        return $this;
    }

    public function getAdrcp(): ?string
    {
        return $this->Adrcp;
    }

    public function setAdrcp(string $Adrcp): static
    {
        $this->Adrcp = $Adrcp;

        return $this;
    }

    public function getAdrville(): ?string
    {
        return $this->Adrville;
    }

    public function setAdrville(string $Adrville): static
    {
        $this->Adrville = $Adrville;

        return $this;
    }

    public function getAdrpays(): ?string
    {
        return $this->Adrpays;
    }

    public function setAdrpays(string $Adrpays): static
    {
        $this->Adrpays = $Adrpays;

        return $this;
    }

   /**
     * @return Collection<int, Users>
     */
    public function getUsers(): Collection
    {
        return $this->users;
    }

    public function addUser(Users $user): static
    {
        if (!$this->users->contains($user)) {
            $this->users->add($user);
            $user->addAdresse($this);
        }

        return $this;
    }

    public function removeUser(Users $user): static
    {
        if ($this->users->removeElement($user)) {
            $user->removeAdresse($this);
        }

        return $this;
    }
}
