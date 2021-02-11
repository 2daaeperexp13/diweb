<?php

namespace App\Entity;
use App\Entity\Producto;
use App\Repository\ImgProductoRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ImgProductoRepository::class)
 */
class ImgProducto
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="text")
     */
    private $img;

    /**
     * @ORM\ManyToOne(targetEntity=producto::class, inversedBy="imgProductos")
     * @ORM\JoinColumn(nullable=false, onDelete="CASCADE")
     */
    private $producto;

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

    public function getProducto(): ?producto
    {
        return $this->producto;
    }

    public function setProducto(?producto $producto): self
    {
        $this->producto = $producto;

        return $this;
    }
}
