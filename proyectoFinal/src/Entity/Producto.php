<?php

namespace App\Entity;

use App\Repository\ProductoRepository;
use App\Entity\TipoProducto;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ProductoRepository::class)
 */
class Producto
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank
     */
    private $nombre;

    /**
     * @ORM\Column(type="text")
     * @Assert\NotBlank
     */
    private $descripcion;

    /**
     * @ORM\Column(type="float")
     * @Assert\NotBlank
     */
    private $precio;

    /**
     * @ORM\Column(type="integer")
     * @Assert\NotBlank
     */
    private $stock;

    /**
     * @ORM\ManyToOne(targetEntity=Categoria::class)
     * @ORM\JoinColumn(nullable=false)
     * @Assert\NotBlank
     */
    private $categoria;

    /**
     * @ORM\ManyToOne(targetEntity=tipoProducto::class, inversedBy="productos")
     * @ORM\JoinColumn(nullable=false)
     * @Assert\NotBlank
     */
    private $tipoProducto;

    /**
     * @ORM\OneToMany(targetEntity=ImgProducto::class, mappedBy="producto",cascade="persist")
     */
    private $imgProductos;

 

    /**
     * @ORM\ManyToMany(targetEntity=Pedido::class, inversedBy="productos")
     */
    private $pedidos;

    public function __construct()
    {
        $this->imgProductos = new ArrayCollection();
        $this->comentarios = new ArrayCollection();
        $this->pedidos = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNombre(): ?string
    {
        return $this->nombre;
    }

    public function setNombre(string $nombre): self
    {
        $this->nombre = $nombre;

        return $this;
    }

    public function getDescripcion(): ?string
    {
        return $this->descripcion;
    }

    public function setDescripcion(string $descripcion): self
    {
        $this->descripcion = $descripcion;

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

    public function getStock(): ?int
    {
        return $this->stock;
    }

    public function setStock(int $stock): self
    {
        $this->stock = $stock;

        return $this;
    }

    public function getCategoria(): ?Categoria
    {
        return $this->categoria;
    }

    public function setCategoria(?Categoria $categoria): self
    {
        $this->categoria = $categoria;

        return $this;
    }

    public function getTipoProducto(): ?tipoProducto
    {
        return $this->tipoProducto;
    }

    public function setTipoProducto(?tipoProducto $tipoProducto): self
    {
        $this->tipoProducto = $tipoProducto;

        return $this;
    }

    /**
     * @return Collection|ImgProducto[]
     */
    public function getImgProductos(): Collection
    {
        return $this->imgProductos;
    }

    public function addImgProducto(ImgProducto $imgProducto): self
    {
        if (!$this->imgProductos->contains($imgProducto)) {
            $this->imgProductos->add($imgProducto);
            $imgProducto->setProducto($this);
        }

        return $this;
    }

    public function removeImgProducto(ImgProducto $imgProducto): self
    {
        if ($this->imgProductos->removeElement($imgProducto)) {
            // set the owning side to null (unless already changed)
            if ($imgProducto->getProducto() === $this) {
                $imgProducto->setProducto(null);
            }
        }

        return $this;
    }

    

    /**
     * @return Collection|Pedido[]
     */
    public function getPedidos(): Collection
    {
        return $this->pedidos;
    }

    public function addPedido(Pedido $pedido): self
    {
        if (!$this->pedidos->contains($pedido)) {
            $this->pedidos[] = $pedido;
        }

        return $this;
    }

    public function removePedido(Pedido $pedido): self
    {
        $this->pedidos->removeElement($pedido);
        return $this;
    }

}
