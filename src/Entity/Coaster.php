<?php

namespace App\Entity;

use App\Repository\CoasterRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CoasterRepository::class)]
class Coaster
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 80)]
    private ?string $name = null;

    #[ORM\Column]
    private ?int $integer = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;

        return $this;
    }

    public function getInteger(): ?int
    {
        return $this->integer;
    }

    public function setInteger(int $integer): static
    {
        $this->integer = $integer;

        return $this;
    }
}
