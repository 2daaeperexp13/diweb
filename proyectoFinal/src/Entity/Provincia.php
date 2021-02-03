<?php

namespace App\Entity;

use App\Repository\ProvinciaRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ProvinciaRepository::class)
 */
class Provincia
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nombreProv;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNombreProv(): ?string
    {
        return $this->nombreProv;
    }

    public function setNombreProv(string $nombreProv): self
    {
        $this->nombreProv = $nombreProv;

        return $this;
    }
}
