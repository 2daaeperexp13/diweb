<?php

namespace App\Entity;

use App\Repository\ProvinciaRepository;
use Symfony\Component\Validator\Constraints as Assert;
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
     * @ORM\Column(type="integer")
     * @Assert\NotNull(message=" El código no puede ser null:/")
     */
    private $codProv;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotNull(message=" El nombre de la provincia no puede ser null:/")
     */
    private $nombre;

    
    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCodProv(): ?int
    {
        return $this->codProv;
    }

    public function setCodProv(int $codProv): self
    {
        $this->codProv = $codProv;

        return $this;
    }

    public function getNombre(): ?string
    {
        return $this->nombre;
    }

    public function setNombre(string $nombre): self
    {
        $this->nombre = $nombre;

        return $this;
    }

    public function __toString() {
        return $this->nombre;
    }
}
