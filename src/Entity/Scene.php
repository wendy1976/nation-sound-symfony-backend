<?php

namespace App\Entity;

use App\Repository\SceneRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\UX\Turbo\Attribute\Broadcast;

#[ORM\Entity(repositoryClass: SceneRepository::class)]
#[Broadcast]
class Scene
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nom_scene = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomScene(): ?string
    {
        return $this->nom_scene;
    }

    public function setNomScene(string $nom_scene): static
    {
        $this->nom_scene = $nom_scene;

        return $this;
    }
}
