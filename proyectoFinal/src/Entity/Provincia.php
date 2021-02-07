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
     * @ORM\Column(type="integer")
     */
    private $codProv;

    /**
     * @ORM\Column(type="string", length=255)
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
