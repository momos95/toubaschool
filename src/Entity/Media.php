<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Media
 *
 * @ORM\Table(name="media", indexes={@ORM\Index(name="media_created_by", columns={"created_by"}), @ORM\Index(name="media_is_type", columns={"type"}), @ORM\Index(name="auteur", columns={"auteur"}), @ORM\Index(name="media_has_status", columns={"status"})})
 * @ORM\Entity
 */
class Media
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="titre", type="string", length=250, nullable=false)
     */
    private $titre;

    /**
     * @var string
     *
     * @ORM\Column(name="desc_fr", type="text", length=65535, nullable=false)
     */
    private $descFr;

    /**
     * @var string
     *
     * @ORM\Column(name="desc_an", type="text", length=65535, nullable=false)
     */
    private $descAn;

    /**
     * @var string
     *
     * @ORM\Column(name="desc_ar", type="text", length=65535, nullable=false)
     */
    private $descAr;

    /**
     * @var string
     *
     * @ORM\Column(name="file_fr", type="string", length=200, nullable=false)
     */
    private $fileFr;

    /**
     * @var string
     *
     * @ORM\Column(name="file_an", type="string", length=200, nullable=false)
     */
    private $fileAn;

    /**
     * @var string
     *
     * @ORM\Column(name="file_ar", type="string", length=200, nullable=false)
     */
    private $fileAr;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $createdAt = 'CURRENT_TIMESTAMP';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_update", type="datetime", nullable=false, options={"default"="0000-00-00 00:00:00"})
     */
    private $lastUpdate = '0000-00-00 00:00:00';

    /**
     * @var \Auteur
     *
     * @ORM\ManyToOne(targetEntity="Auteur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="auteur", referencedColumnName="id")
     * })
     */
    private $auteur;

    /**
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="created_by", referencedColumnName="id")
     * })
     */
    private $createdBy;

    /**
     * @var \MediaStatus
     *
     * @ORM\ManyToOne(targetEntity="MediaStatus")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="status", referencedColumnName="id")
     * })
     */
    private $status;

    /**
     * @var \MediaType
     *
     * @ORM\ManyToOne(targetEntity="MediaType")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="type", referencedColumnName="id")
     * })
     */
    private $type;

    public function __construct()
    {
        $this->createdAt = new \DateTime() ;
        $this->lastUpdate = new \DateTime() ;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitre(): ?string
    {
        return $this->titre;
    }

    public function setTitre(string $titre): self
    {
        $this->titre = $titre;

        return $this;
    }

    public function getDescFr(): ?string
    {
        return $this->descFr;
    }

    public function setDescFr(string $descFr): self
    {
        $this->descFr = $descFr;

        return $this;
    }

    public function getDescAn(): ?string
    {
        return $this->descAn;
    }

    public function setDescAn(string $descAn): self
    {
        $this->descAn = $descAn;

        return $this;
    }

    public function getDescAr(): ?string
    {
        return $this->descAr;
    }

    public function setDescAr(string $descAr): self
    {
        $this->descAr = $descAr;

        return $this;
    }

    public function getFileFr(): ?string
    {
        return $this->fileFr;
    }

    public function setFileFr(string $fileFr): self
    {
        $this->fileFr = $fileFr;

        return $this;
    }

    public function getFileAn(): ?string
    {
        return $this->fileAn;
    }

    public function setFileAn(string $fileAn): self
    {
        $this->fileAn = $fileAn;

        return $this;
    }

    public function getFileAr(): ?string
    {
        return $this->fileAr;
    }

    public function setFileAr(string $fileAr): self
    {
        $this->fileAr = $fileAr;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeInterface $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    public function getLastUpdate(): ?\DateTimeInterface
    {
        return $this->lastUpdate;
    }

    public function setLastUpdate(\DateTimeInterface $lastUpdate): self
    {
        $this->lastUpdate = $lastUpdate;

        return $this;
    }

    public function getAuteur(): ?Auteur
    {
        return $this->auteur;
    }

    public function setAuteur(?Auteur $auteur): self
    {
        $this->auteur = $auteur;

        return $this;
    }

    public function getCreatedBy(): ?User
    {
        return $this->createdBy;
    }

    public function setCreatedBy(?User $createdBy): self
    {
        $this->createdBy = $createdBy;

        return $this;
    }

    public function getStatus(): ?MediaStatus
    {
        return $this->status;
    }

    public function setStatus(?MediaStatus $status): self
    {
        $this->status = $status;

        return $this;
    }

    public function getType(): ?MediaType
    {
        return $this->type;
    }

    public function setType(?MediaType $type): self
    {
        $this->type = $type;

        return $this;
    }


}
