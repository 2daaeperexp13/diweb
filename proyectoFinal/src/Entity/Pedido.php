<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use App\Repository\PedidoRepository;

/**
 * Pedido
 *
 * @ORM\Table(name="pedido", indexes={@ORM\Index(name="fk_pedido_usuario1_idx", columns={"dni"})})
 * @ORM\Entity(repositoryClass=PedidoRepository::class)
 */
class Pedido
{
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha", type="datetime", nullable=false)
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $fecha;

    /**
     * @var int|null
     *
     * @ORM\Column(name="precio", type="integer", nullable=true)
     */
    private $precio;

    /**
     * @var Usuario
     *
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Usuario")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="dni", referencedColumnName="dni")
     * })
     */
    private $dni;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Producto", mappedBy="dni")
     */
    private $prods;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->codprod = new \Doctrine\Common\Collections\ArrayCollection();
        $this->prods = new ArrayCollection();
    }

    public function getFecha(): ?\DateTimeInterface
    {
        return $this->fecha;
    }

    public function getPrecio(): ?int
    {
        return $this->precio;
    }

    public function setPrecio(?int $precio): self
    {
        $this->precio = $precio;

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

    /**
     * @return Collection|Producto[]
     */
    public function getProductos(): Collection
    {
        return $this->codprod;
    }

    public function addProducto(Producto $prod, Int $cantidad): self
    {
        if (!$this->codprod->contains($prod)) {
            $this->prods[]["producto"] = $prod;
            $this->prods[]["cantidad"] = $cantidad;
            $this->prods[]["precio"]=$cantidad*$prod->getPrecio();
            $prod->addPedido($this,$cantidad);
        }

        return $this;
    }

    public function removeProducto(Producto $prod): self
    {
        if ($this->prod->removeElement($prod)) {
            $prod->removePedido($this);
        }

        return $this;
    }

    public function setFecha(\DateTimeInterface $fecha): self
    {
        $this->fecha = $fecha;

        return $this;
    }

    /**
     * @return Collection|Producto[]
     */
    public function getProds(): Collection
    {
        return $this->prods;
    }

    public function addProd(Producto $prod, Int $cantidad): self
    {
        if (!$this->prods->contains($prod)) {
            $this->prods[] = $prod;
            $prod->addPedido($this, $cantidad);
        }

        return $this;
    }

    public function removeProd(Producto $prod): self
    {
        if ($this->prods->removeElement($prod)) {
            $prod->removePedido($this);
        }

        return $this;
    }

}
