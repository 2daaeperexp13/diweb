<?php

namespace App\Entity;

use App\Repository\UsuarioRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use App\Entity\Rol;
use App\Entity\Localidad;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Security\Core\User\UserInterface;
/**
 * @ORM\Entity(repositoryClass=UsuarioRepository::class)
 * @UniqueEntity(fields={"email"}, message="There is already an account with this email")
 */
class Usuario implements UserInterface
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=20)
     */
    private $password;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nombre;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $ap1;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $ap2;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $email;

    /**
     * @ORM\Column(type="integer")
     */
    private $telefono;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $direccion;

    /**
     * @ORM\ManyToMany(targetEntity=Rol::class ,inversedBy="usuarios")
     */
    private $rol;

    /**
     * @ORM\ManyToOne(targetEntity=localidad::class)
     * @ORM\JoinColumn(nullable=false)
     */
    private $localidad;

   

    /**
     * @ORM\OneToMany(targetEntity=Tarjeta::class, mappedBy="usuario", orphanRemoval=true)
     */
    private $tarjetas;

    /**
     * @ORM\OneToOne(targetEntity=ImgUser::class, mappedBy="usuario", cascade={"persist", "remove"})
     */
    private $imgUser;

    /**
     * @ORM\OneToMany(targetEntity=Pedido::class, mappedBy="usuario", orphanRemoval=true)
     */
    private $pedidos;


    /**
     * @ORM\Column(type="boolean")
     */
    private $isVerified = false;

    public function __construct()
    {
        $this->rol = new ArrayCollection();
        $this->tarjetas = new ArrayCollection();
        $this->pedidos = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(string $passwd): self
    {
        $this->password = $passwd;

        return $this;
    }

    public function getUserName(): ?string
    {
        return $this->nombre;
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

    public function getAp1(): ?string
    {
        return $this->ap1;
    }

    public function setAp1(string $ap1): self
    {
        $this->ap1 = $ap1;

        return $this;
    }

    public function getAp2(): ?string
    {
        return $this->ap2;
    }

    public function setAp2(string $ap2): self
    {
        $this->ap2 = $ap2;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getTelefono(): ?int
    {
        return $this->telefono;
    }

    public function setTelefono(int $telefono): self
    {
        $this->telefono = $telefono;

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

    /**
     * @return Collection|rol[]
     */
    public function getRoles(): Collection
    {
        return $this->rol;
    }
    public function getRol(): Collection
    {
        return $this->rol;
    }

    public function addRol(rol $rol): self
    {
        if (!$this->rol->contains($rol)) {
            $this->rol[] = $rol;
        }

        return $this;
    }

    public function removeRol(rol $rol): self
    {
        $this->rol->removeElement($rol);

        return $this;
    }

    public function getLocalidad(): ?localidad
    {
        return $this->localidad;
    }

    public function setLocalidad(?localidad $localidad): self
    {
        $this->localidad = $localidad;

        return $this;
    }



    /**
     * @return Collection|Tarjeta[]
     */
    public function getTarjetas(): Collection
    {
        return $this->tarjetas;
    }

    public function addTarjeta(Tarjeta $tarjeta): self
    {
        if (!$this->tarjetas->contains($tarjeta)) {
            $this->tarjetas[] = $tarjeta;
            $tarjeta->setUsuario($this);
        }

        return $this;
    }

    public function removeTarjeta(Tarjeta $tarjeta): self
    {
        if ($this->tarjetas->removeElement($tarjeta)) {
            // set the owning side to null (unless already changed)
            if ($tarjeta->getUsuario() === $this) {
                $tarjeta->setUsuario(null);
            }
        }

        return $this;
    }

    public function getImgUser(): ?ImgUser
    {
        return $this->imgUser;
    }

    public function setImgUser(ImgUser $imgUser): self
    {
        // set the owning side of the relation if necessary
        if ($imgUser->getUsuario() !== $this) {
            $imgUser->setUsuario($this);
        }

        $this->imgUser = $imgUser;

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
            $pedido->setUsuario($this);
        }

        return $this;
    }

    public function removePedido(Pedido $pedido): self
    {
        if ($this->pedidos->removeElement($pedido)) {
            // set the owning side to null (unless already changed)
            if ($pedido->getUsuario() === $this) {
                $pedido->setUsuario(null);
            }
        }

        return $this;
    }

  

    public function getSalt(){

    }

    public function eraseCredentials()
    {
        
    }

    public function isVerified(): bool
    {
        return $this->isVerified;
    }

    public function setIsVerified(bool $isVerified): self
    {
        $this->isVerified = $isVerified;

        return $this;
    }
}
