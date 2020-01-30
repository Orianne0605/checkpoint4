<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\PackagesRepository")
 */
class Packages
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $name;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $checkbook;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $web_consultation;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $overdraft_loan;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $insurance;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $withdrawal;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $exclusiveness;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Affiliate", inversedBy="affiliate")
     */
    private $affiliate;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\cards", inversedBy="packages")
     */
    private $packages;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Conditions", mappedBy="conditions")
     */
    private $conditions;

    public function __construct()
    {
        $this->packages = new ArrayCollection();
        $this->conditions = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getCheckbook(): ?bool
    {
        return $this->checkbook;
    }

    public function setCheckbook(?bool $checkbook): self
    {
        $this->checkbook = $checkbook;

        return $this;
    }

    public function getWebConsultation(): ?bool
    {
        return $this->web_consultation;
    }

    public function setWebConsultation(?bool $web_consultation): self
    {
        $this->web_consultation = $web_consultation;

        return $this;
    }

    public function getOverdraftLoan(): ?bool
    {
        return $this->overdraft_loan;
    }

    public function setOverdraftLoan(?bool $overdraft_loan): self
    {
        $this->overdraft_loan = $overdraft_loan;

        return $this;
    }

    public function getInsurance(): ?bool
    {
        return $this->insurance;
    }

    public function setInsurance(?bool $insurance): self
    {
        $this->insurance = $insurance;

        return $this;
    }

    public function getWithdrawal(): ?string
    {
        return $this->withdrawal;
    }

    public function setWithdrawal(?string $withdrawal): self
    {
        $this->withdrawal = $withdrawal;

        return $this;
    }

    public function getExclusiveness(): ?string
    {
        return $this->exclusiveness;
    }

    public function setExclusiveness(?string $exclusiveness): self
    {
        $this->exclusiveness = $exclusiveness;

        return $this;
    }

    public function getAffiliate(): ?Affiliate
    {
        return $this->affiliate;
    }

    public function setAffiliate(?Affiliate $affiliate): self
    {
        $this->affiliate = $affiliate;

        return $this;
    }

    /**
     * @return Collection|cards[]
     */
    public function getPackages(): Collection
    {
        return $this->packages;
    }

    public function addPackage(cards $package): self
    {
        if (!$this->packages->contains($package)) {
            $this->packages[] = $package;
        }

        return $this;
    }

    public function removePackage(cards $package): self
    {
        if ($this->packages->contains($package)) {
            $this->packages->removeElement($package);
        }

        return $this;
    }

    /**
     * @return Collection|Conditions[]
     */
    public function getConditions(): Collection
    {
        return $this->conditions;
    }

    public function addCondition(Conditions $condition): self
    {
        if (!$this->conditions->contains($condition)) {
            $this->conditions[] = $condition;
            $condition->addCondition($this);
        }

        return $this;
    }

    public function removeCondition(Conditions $condition): self
    {
        if ($this->conditions->contains($condition)) {
            $this->conditions->removeElement($condition);
            $condition->removeCondition($this);
        }

        return $this;
    }
}
