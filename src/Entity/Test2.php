<?php

namespace App\Entity;

use App\Repository\Test2Repository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: Test2Repository::class)]
class Test2
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 100)]
    private ?string $lib2 = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLib2(): ?string
    {
        return $this->lib2;
    }

    public function setLib2(string $lib2): self
    {
        $this->lib2 = $lib2;

        return $this;
    }
}
