<?php

namespace App\Entity;

use App\Repository\PedidoRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=PedidoRepository::class)
 */
class Pedido
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string")
     * @Assert\NotBlank
     * @Assert\NotNull(message=" La fecha no puede ser null:/")
     */
    private $fecha;

    /**
     * @ORM\Column(type="float")
     * @Assert\NotBlank
     * @Assert\NotNull(message="El precio no puede ser null")
     */
    private $precio;

   

    /**
     * @ORM\ManyToMany(targetEntity=Producto::class, mappedBy="pedidos")
     * @Assert\NotNull(message="Un pedido no puede contener 0 productos")
     */
    private $productos;

    /**
     * @ORM\ManyToOne(targetEntity=Usuario::class, inversedBy="pedidos")
     * @ORM\JoinColumn(nullable=false)
     * @Assert\NotNull(message="Un pedido debe estar asociado a un usuario, este no puede ser null")
     */
    private $user;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank
     * @Assert\NotNull(message="Un pedido debe terner una dirección asociada")
     */
    private $direccion;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotNull(message="Un pedido debe tener una tarjeta de crédito o débito asociada a su pago")
     * @Assert\NotBlank
     */
    private $tarjeta;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank
     * @Assert\NotNull(message="La tarjeta asociada al pedido debe tener una fecha de vencimiento")
     */
    private $fechaVencimiento;

    public function __construct()
    {
        $this->pedidoProdutos = new ArrayCollection();
        $this->productos = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFecha()
    {
        return $this->fecha;
    }

    public function setFecha( $fecha): self
    {
        $this->fecha = $fecha;

        return $this;
    }

    public function getPrecio(): ?float
    {
        return $this->precio;
    }

    public function setPrecio(float $precio): self
    {
        $this->precio = $precio;

        return $this;
    }


    /**
     * @return Collection|Producto[]
     */
    public function getProductos(): Collection
    {
        return $this->productos;
    }

    public function addProducto(Producto $producto): self
    {
        if (!$this->productos->contains($producto)) {
            $this->productos[] = $producto;
            $producto->addPedido($this);
        }

        return $this;
    }

    public function removeProducto(Producto $producto): self
    {
        $this->productos->removeElement($producto);

        return $this;
    }

    public function getUser(): ?Usuario
    {
        return $this->user;
    }

    public function setUser(?Usuario $user): self
    {
        $this->user = $user;

        return $this;
    }

    public function getDireccion(): ?string
    {
        return $this->direccion;
    }

    public function setDireccion(string $direccion): self
    {
        $this->direccion = $direccion;

        return $this;
    }

    public function getTarjeta(): ?string
    {
        return $this->tarjeta;
    }

    public function setTarjeta(string $tarjeta): self
    {
        $this->tarjeta = $tarjeta;

        return $this;
    }

    public function getFechaVencimiento(): ?string
    {
        return $this->fechaVencimiento;
    }

    public function setFechaVencimiento(string $fechaVencimiento): self
    {
        $this->fechaVencimiento = $fechaVencimiento;

        return $this;
    }

    public function __toString()
    {
        return $this->id."";
    }
}
