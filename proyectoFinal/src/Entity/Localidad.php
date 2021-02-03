<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Repository\CategoriaRepository;
/**
 * Localidad
 *
 * @ORM\Table(name="localidad", indexes={@ORM\Index(name="fk_localidad_provincia_idx", columns={"codProv"})})
 * @ORM\Entity(repositoryClass=LocalidadRepository::class)
 */
class Localidad
{
    /**
     * @var int
     *
     * @ORM\Column(name="codLoc", type="integer", nullable=false)
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $codloc;

    /**
     * @var string|null
     *
     * @ORM\Column(name="nombreLoc", type="string", length=45, nullable=true)
     */
    private $nombreloc;

    /**
     * @var Provincia
     *
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Provincia")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="codProv", referencedColumnName="codProv")
     * })
     */
    private $codprov;

    public function getCodloc(): ?int
    {
        return $this->codloc;
    }

    public function getNombreloc(): ?string
    {
        return $this->nombreloc;
    }

    public function setNombreloc(?string $nombreloc): self
    {
        $this->nombreloc = $nombreloc;

        return $this;
    }

    public function getCodprov(): ?Provincia
    {
        return $this->codprov;
    }

    public function setCodprov(?Provincia $codprov): self
    {
        $this->codprov = $codprov;

        return $this;
    }

    public function setCodloc(int $codloc): self
    {
        $this->codloc = $codloc;

        return $this;
    }


}
