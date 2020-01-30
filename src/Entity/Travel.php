<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\TravelRepository")
 */
class Travel
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
    private $travel;

    public function getId(): ?int
    {
        return $this->id;
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
}
