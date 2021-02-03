<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Repository\UsuarioRepository;

/**
 * Usuario
 *
 * @ORM\Table(name="usuario", indexes={@ORM\Index(name="fk_usuario_localidad1_idx", columns={"codLoc", "codProv"}), @ORM\Index(name="fk_usuario_rol1_idx", columns={"codRol"})})
 * @ORM\Entity(repositoryClass=UsuarioRepository::class)
 */
class Usuario
{
    /**
     * @var int
     *
     * @ORM\Column(name="dni", type="integer", nullable=false)
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $dni;

    /**
     * @var string
     *
     * @ORM\Column(name="passwd", type="string", length=45, nullable=false)
     */
    private $passwd;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=45, nullable=false)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="ap1", type="string", length=45, nullable=false)
     */
    private $ap1;

    /**
     * @var string
     *
     * @ORM\Column(name="ap2", type="string", length=45, nullable=false)
     */
    private $ap2;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=45, nullable=false)
     */
    private $email;

    /**
     * @var int
     *
     * @ORM\Column(name="telefono", type="integer", nullable=false)
     */
    private $telefono;

    /**
     * @var string
     *
     * @ORM\Column(name="calle", type="string", length=45, nullable=false)
     */
    private $calle;

    /**
     * @var int
     *
     * @ORM\Column(name="num", type="integer", nullable=false)
     */
    private $num;

    /**
     * @var string|null
     *
     * @ORM\Column(name="puerta", type="string", length=45, nullable=true)
     */
    private $puerta;

    /**
     * @var string|null
     *
     * @ORM\Column(name="escalera", type="string", length=45, nullable=true)
     */
    private $escalera;

    /**
     * @var string|null
     *
     * @ORM\Column(name="bloque", type="string", length=45, nullable=true)
     */
    private $bloque;

    /**
     * @var int|null
     *
     * @ORM\Column(name="planta", type="integer", nullable=true)
     */
    private $planta;

    /**
     * @var Localidad
     *
     * @ORM\ManyToOne(targetEntity="Localidad")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="codLoc", referencedColumnName="codLoc"),
     *   @ORM\JoinColumn(name="codProv", referencedColumnName="codProv")
     * })
     */
    private $codloc;

    /**
     * @var Rol
     *
     * @ORM\ManyToOne(targetEntity="Rol")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="codRol", referencedColumnName="codRol")
     * })
     */
    private $codrol;

    public function getDni(): ?int
    {
        return $this->dni;
    }

    public function getPasswd(): ?string
    {
        return $this->passwd;
    }

    public function setPasswd(string $passwd): self
    {
        $this->passwd = $passwd;

        return $this;
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

    public function getCalle(): ?string
    {
        return $this->calle;
    }

    public function setCalle(string $calle): self
    {
        $this->calle = $calle;

        return $this;
    }

    public function getNum(): ?int
    {
        return $this->num;
    }

    public function setNum(int $num): self
    {
        $this->num = $num;

        return $this;
    }

    public function getPuerta(): ?string
    {
        return $this->puerta;
    }

    public function setPuerta(?string $puerta): self
    {
        $this->puerta = $puerta;

        return $this;
    }

    public function getEscalera(): ?string
    {
        return $this->escalera;
    }

    public function setEscalera(?string $escalera): self
    {
        $this->escalera = $escalera;

        return $this;
    }

    public function getBloque(): ?string
    {
        return $this->bloque;
    }

    public function setBloque(?string $bloque): self
    {
        $this->bloque = $bloque;

        return $this;
    }

    public function getPlanta(): ?int
    {
        return $this->planta;
    }

    public function setPlanta(?int $planta): self
    {
        $this->planta = $planta;

        return $this;
    }

    public function getCodloc(): ?Localidad
    {
        return $this->codloc;
    }

    public function setCodloc(?Localidad $codloc): self
    {
        $this->codloc = $codloc;

        return $this;
    }

    public function getCodrol(): ?Rol
    {
        return $this->codrol;
    }

    public function setCodrol(?Rol $codrol): self
    {
        $this->codrol = $codrol;

        return $this;
    }

    public function setDni(int $dni): self
    {
        $this->dni = $dni;

        return $this;
    }


}
