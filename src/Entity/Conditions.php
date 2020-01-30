<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ConditionsRepository")
 */
class Conditions
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
    private $earnings;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $travel;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $age;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Packages", inversedBy="conditions")
     */
    private $conditions;

    public function __construct()
    {
        $this->conditions = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEarnings(): ?string
    {
        return $this->earnings;
    }

    public function setEarnings(string $earnings): self
    {
        $this->earnings = $earnings;

        return $this;
    }

    public function getTravel(): ?string
    {
        return $this->travel;
    }

    public function setTravel(string $travel): self
    {
        $this->travel = $travel;

        return $this;
    }

    public function getAge(): ?string
    {
        return $this->age;
    }

    public function setAge(string $age): self
    {
        $this->age = $age;

        return $this;
    }

    /**
     * @return Collection|Packages[]
     */
    public function getConditions(): Collection
    {
        return $this->conditions;
    }

    public function addCondition(Packages $condition): self
    {
        if (!$this->conditions->contains($condition)) {
            $this->conditions[] = $condition;
        }

        return $this;
    }

    public function removeCondition(Packages $condition): self
    {
        if ($this->conditions->contains($condition)) {
            $this->conditions->removeElement($condition);
        }

        return $this;
    }
}
