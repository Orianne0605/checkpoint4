<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\EarningsRepository")
 */
class Earnings
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
}
