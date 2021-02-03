<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Repository\ProvinciaRepository;

/**
 * Provincia
 *
 * @ORM\Table(name="provincia", uniqueConstraints={@ORM\UniqueConstraint(name="nombreProv_UNIQUE", columns={"nombreProv"})})
 * @ORM\Entity(repositoryClass=ProvinciaRepository::class)
 */
class Provincia
{
    /**
     * @var int
     *
     * @ORM\Column(name="codProv", type="integer", nullable=false)
     * @ORM\GeneratedValue(strategy="IDENTITY")
     * 
     */
    private $codprov;

    /**
     * @var string|null
     *
     * @ORM\Column(name="nombreProv", type="string", length=45, nullable=true)
     */
    private $nombreprov;

    public function getCodprov(): ?int
    {
        return $this->codprov;
    }

    public function getNombreprov(): ?string
    {
        return $this->nombreprov;
    }

    public function setNombreprov(?string $nombreprov): self
    {
        $this->nombreprov = $nombreprov;

        return $this;
    }

    public function setCodprov(int $codprov): self
    {
        $this->codprov = $codprov;

        return $this;
    }


}
