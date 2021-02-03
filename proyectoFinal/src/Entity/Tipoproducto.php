<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Repository\TipoproductoRepository;

/**
 * Tipoproducto
 *
 * @ORM\Table(name="tipoproducto")
 * @ORM\Entity(repositoryClass=TipoproductoRepository::class)
 */
class Tipoproducto
{
    /**
     * @var string
     *
     * @ORM\Column(name="tipo", type="string", length=45, nullable=false)
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $tipo;

    public function getTipo(): ?string
    {
        return $this->tipo;
    }

    public function setTipo(string $tipo): self
    {
        $this->tipo = $tipo;

        return $this;
    }


}
