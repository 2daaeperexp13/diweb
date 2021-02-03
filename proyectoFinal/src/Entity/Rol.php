<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Repository\RolRepository;

/**
 * Rol
 *
 * @ORM\Table(name="rol")
 * @ORM\Entity(repositoryClass=RolRepository::class)
 */
class Rol
{
    /**
     * @var int
     *
     * @ORM\Column(name="codRol", type="integer", nullable=false)
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $codrol;

    /**
     * @var string|null
     *
     * @ORM\Column(name="tipoRol", type="string", length=45, nullable=true)
     */
    private $tiporol;

    public function getCodrol(): ?int
    {
        return $this->codrol;
    }

    public function getTiporol(): ?string
    {
        return $this->tiporol;
    }

    public function setTiporol(?string $tiporol): self
    {
        $this->tiporol = $tiporol;

        return $this;
    }

    public function setCodrol(int $codrol): self
    {
        $this->codrol = $codrol;

        return $this;
    }


}
