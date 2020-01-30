<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\EurozoneRepository")
 */
class Eurozone
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="boolean")
     */
    private $eurozone;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEurozone(): ?bool
    {
        return $this->eurozone;
    }

    public function setEurozone(bool $eurozone): self
    {
        $this->eurozone = $eurozone;

        return $this;
    }
}
