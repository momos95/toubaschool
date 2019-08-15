<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Pays
 *
 * @ORM\Table(name="pays")
 * @ORM\Entity
 */
class Pays
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_pays", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idPays;

    /**
     * @var int
     *
     * @ORM\Column(name="code", type="integer", nullable=false)
     */
    private $code;

    /**
     * @var string
     *
     * @ORM\Column(name="alpha2", type="string", length=2, nullable=false)
     */
    private $alpha2;

    /**
     * @var string
     *
     * @ORM\Column(name="alpha3", type="string", length=3, nullable=false)
     */
    private $alpha3;

    /**
     * @var string
     *
     * @ORM\Column(name="lib_en", type="string", length=45, nullable=false)
     */
    private $libEn;

    /**
     * @var string
     *
     * @ORM\Column(name="lib_fr", type="string", length=45, nullable=false)
     */
    private $libFr;

    public function getIdPays(): ?int
    {
        return $this->idPays;
    }

    public function getCode(): ?int
    {
        return $this->code;
    }

    public function setCode(int $code): self
    {
        $this->code = $code;

        return $this;
    }

    public function getAlpha2(): ?string
    {
        return $this->alpha2;
    }

    public function setAlpha2(string $alpha2): self
    {
        $this->alpha2 = $alpha2;

        return $this;
    }

    public function getAlpha3(): ?string
    {
        return $this->alpha3;
    }

    public function setAlpha3(string $alpha3): self
    {
        $this->alpha3 = $alpha3;

        return $this;
    }

    public function getLibEn(): ?string
    {
        return $this->libEn;
    }

    public function setLibEn(string $libEn): self
    {
        $this->libEn = $libEn;

        return $this;
    }

    public function getLibFr(): ?string
    {
        return $this->libFr;
    }

    public function setLibFr(string $libFr): self
    {
        $this->libFr = $libFr;

        return $this;
    }


}
