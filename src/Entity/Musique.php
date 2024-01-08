<?php

namespace App\Entity;

use App\Repository\MusiqueRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\UX\Turbo\Attribute\Broadcast;

#[ORM\Entity(repositoryClass: MusiqueRepository::class)]
#[Broadcast]
class Musique
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $style_musique = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getStyleMusique(): ?string
    {
        return $this->style_musique;
    }

    public function setStyleMusique(string $style_musique): static
    {
        $this->style_musique = $style_musique;

        return $this;
    }
}
