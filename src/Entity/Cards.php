<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CardsRepository")
 */
class Cards
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $scale;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $type;

    /**
     * @ORM\Column(type="boolean")
     */
    private $balance_check;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Packages", mappedBy="packages")
     */
    private $packages;

    public function __construct()
    {
        $this->packages = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getScale(): ?string
    {
        return $this->scale;
    }

    public function setScale(string $scale): self
    {
        $this->scale = $scale;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getBalanceCheck(): ?bool
    {
        return $this->balance_check;
    }

    public function setBalanceCheck(bool $balance_check): self
    {
        $this->balance_check = $balance_check;

        return $this;
    }

    /**
     * @return Collection|Packages[]
     */
    public function getPackages(): Collection
    {
        return $this->packages;
    }

    public function addPackage(Packages $package): self
    {
        if (!$this->packages->contains($package)) {
            $this->packages[] = $package;
            $package->addPackage($this);
        }

        return $this;
    }

    public function removePackage(Packages $package): self
    {
        if ($this->packages->contains($package)) {
            $this->packages->removeElement($package);
            $package->removePackage($this);
        }

        return $this;
    }
}
