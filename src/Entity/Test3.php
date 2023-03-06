<?php

namespace App\Entity;

use App\Repository\Test3Repository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: Test3Repository::class)]
class Test3
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(nullable: true)]
    private ?int $plop = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPlop(): ?int
    {
        return $this->plop;
    }

    public function setPlop(?int $plop): self
    {
        $this->plop = $plop;

        return $this;
    }
}
