<?php

namespace App\Entity;

use App\Repository\TipoProductoRepository;
use App\Entity\Producto;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TipoProductoRepository::class)
 */
class TipoProducto
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotNull(message=" El tipo de producto no puede ser null:/")
     * @Assert\NotBlank
     */
    private $tipo;

    /**
     * @ORM\OneToMany(targetEntity=Producto::class, mappedBy="tipoProducto")
     */
    private $productos;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $icono;

    public function __construct()
    {
        $this->productos = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTipo(): ?string
    {
        return $this->tipo;
    }

    public function setTipo(string $tipo): self
    {
        $this->tipo = $tipo;

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
            $producto->setTipoProducto($this);
        }

        return $this;
    }

    public function removeProducto(Producto $producto): self
    {
        if ($this->productos->removeElement($producto)) {
            // set the owning side to null (unless already changed)
            if ($producto->getTipoProducto() === $this) {
                $producto->setTipoProducto(null);
            }
        }

        return $this;
    }

    public function __toString()
    {
        return $this->getTipo();
    }

    public function getIcono(): ?string
    {
        return $this->icono;
    }

    public function setIcono(?string $icono): self
    {
        $this->icono = $icono;

        return $this;
    }
}
