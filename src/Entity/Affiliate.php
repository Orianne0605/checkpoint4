<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\AffiliateRepository")
 */
class Affiliate
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
    private $logo;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Category", inversedBy="category")
     */
    private $category;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\packages", mappedBy="affiliate")
     */
    private $affiliate;

    public function __construct()
    {
        $this->affiliate = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLogo(): ?string
    {
        return $this->logo;
    }

    public function setLogo(string $logo): self
    {
        $this->logo = $logo;

        return $this;
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

    public function getCategory(): ?Category
    {
        return $this->category;
    }

    public function setCategory(?Category $category): self
    {
        $this->category = $category;

        return $this;
    }

    /**
     * @return Collection|packages[]
     */
    public function getAffiliate(): Collection
    {
        return $this->affiliate;
    }

    public function addAffiliate(packages $affiliate): self
    {
        if (!$this->affiliate->contains($affiliate)) {
            $this->affiliate[] = $affiliate;
            $affiliate->setAffiliate($this);
        }

        return $this;
    }

    public function removeAffiliate(packages $affiliate): self
    {
        if ($this->affiliate->contains($affiliate)) {
            $this->affiliate->removeElement($affiliate);
            // set the owning side to null (unless already changed)
            if ($affiliate->getAffiliate() === $this) {
                $affiliate->setAffiliate(null);
            }
        }

        return $this;
    }

}
