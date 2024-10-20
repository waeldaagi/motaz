<?php

namespace App\Entity;

use App\Repository\ClubRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ClubRepository::class)]
class Club
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $esmk = null;

    #[ORM\Column]
    private ?int $age = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEsmk(): ?string
    {
        return $this->esmk;
    }

    public function setEsmk(string $esmk): static
    {
        $this->esmk = $esmk;

        return $this;
    }

    public function getAge(): ?int
    {
        return $this->age;
    }

    public function setAge(int $age): static
    {
        $this->age = $age;

        return $this;
    }

    public function setId(int $id): static
    {
        $this->id = $id;

        return $this;
    }
}
