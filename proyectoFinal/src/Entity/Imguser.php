<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Repository\ImguserRepository;

/**
 * Imguser
 *
 * @ORM\Table(name="imguser", indexes={@ORM\Index(name="fk_imgUser_usuario1_idx", columns={"dni"})})
 * @ORM\Entity(repositoryClass=ImgUserRepository::class)
 */
class Imguser
{
    /**
     * @var string
     *
     * @ORM\Column(name="img", type="blob", length=0, nullable=false)
     */
    private $img;

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

    public function getImg()
    {
        return $this->img;
    }

    public function setImg($img): self
    {
        $this->img = $img;

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


}
