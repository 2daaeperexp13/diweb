<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Repository\ImgproductoRepository;


/**
 * Imgproducto
 *
 * @ORM\Table(name="imgproducto", indexes={@ORM\Index(name="fk_imgproducto_producto1", columns={"codProd"})})
 * @ORM\Entity(repositoryClass=ImgproductoRepository::class)
 */
class Imgproducto
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="img", type="blob", length=0, nullable=false)
     */
    private $img;

    /**
     * @var \Producto
     *
     * @ORM\ManyToOne(targetEntity="Producto")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="codProd", referencedColumnName="codProd")
     * })
     */
    private $codprod;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getImg()
    {
        return $this->img;
    }

    public function setImg($img): self
    {
        $this->img = $img;

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

    public function setId(int $id): self
    {
        $this->id = $id;

        return $this;
    }


}
