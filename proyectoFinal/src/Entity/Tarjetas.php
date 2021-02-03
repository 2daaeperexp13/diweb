<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Repository\TarjetasRepository;

/**
 * Tarjetas
 *
 * @ORM\Table(name="tarjetas", indexes={@ORM\Index(name="fk_tarjetas_usuario1_idx", columns={"dni"})})
 * @ORM\Entity(repositoryClass=TarjetasRepository::class)
 */
class Tarjetas
{
    /**
     * @var int
     *
     * @ORM\Column(name="numero", type="integer", nullable=false)
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $numero;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechavencimiento", type="date", nullable=false)
     */
    private $fechavencimiento;

    /**
     * @var Usuario
     *
     * @ORM\ManyToOne(targetEntity="Usuario")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="dni", referencedColumnName="dni")
     * })
     */
    private $dni;

    public function getNumero(): ?int
    {
        return $this->numero;
    }

    public function getFechavencimiento(): ?\DateTimeInterface
    {
        return $this->fechavencimiento;
    }

    public function setFechavencimiento(\DateTimeInterface $fechavencimiento): self
    {
        $this->fechavencimiento = $fechavencimiento;

        return $this;
    }

    public function getDni(): ?Usuario
    {
        return $this->dni;
    }

    public function setDni(?Usuario $dni): self
    {
        $this->dni = $dni;

        return $this;
    }

    public function setNumero(int $numero): self
    {
        $this->numero = $numero;

        return $this;
    }


}
