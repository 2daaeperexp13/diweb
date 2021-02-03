<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Repository\ComentarioRepository;

/**
 * Comentario
 *
 * @ORM\Table(name="comentario", indexes={@ORM\Index(name="fk_comentario_producto1_idx", columns={"codProd"}), @ORM\Index(name="IDX_4B91E7027F8F253B", columns={"dni"})})
 * @ORM\Entity(repositoryClass=ComentarioRepository::class)
 */
class Comentario
{
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha", type="datetime", nullable=false)
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $fecha;

    /**
     * @var string
     *
     * @ORM\Column(name="comentario", type="text", length=0, nullable=false)
     */
    private $comentario;

    /**
     * @var \Producto
     *
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Producto")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="codProd", referencedColumnName="codProd")
     * })
     */
    private $codprod;

    /**
     * @var \Usuario
     *

     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Usuario")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="dni", referencedColumnName="dni")
     * })
     */
    private $dni;

    public function getFecha(): ?\DateTimeInterface
    {
        return $this->fecha;
    }

    public function getComentario(): ?string
    {
        return $this->comentario;
    }

    public function setComentario(string $comentario): self
    {
        $this->comentario = $comentario;

        return $this;
    }

    public function getCodprod(): ?Producto
    {
        return $this->codprod;
    }

    public function setCodprod(?Producto $codprod): self
    {
        $this->codprod = $codprod;

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

    public function setFecha(\DateTimeInterface $fecha): self
    {
        $this->fecha = $fecha;

        return $this;
    }


}
