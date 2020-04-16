<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/**
 * Employe
 *
 * @ORM\Table(name="EMPLOYE", uniqueConstraints={@ORM\UniqueConstraint(name="NUMSECU_UNIQUE", columns={"NUMSECU"})})
 * @ORM\Entity
 * @ApiResource()
 */
class Employe
{
    /**
     * @var int
     *
     * @ORM\Column(name="ID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="NUMSECU", type="bigint", nullable=false)
     */
    private $numsecu;

    /**
     * @var string
     *
     * @ORM\Column(name="NOM", type="string", length=50, nullable=false)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="PRENOM", type="string", length=50, nullable=false)
     */
    private $prenom;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DATE_NAISSANCE", type="date", nullable=false)
     */
    private $dateNaissance;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNumsecu(): ?string
    {
        return $this->numsecu;
    }

    public function setNumsecu(string $numsecu): self
    {
        $this->numsecu = $numsecu;

        return $this;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getDateNaissance(): ?\DateTimeInterface
    {
        return $this->dateNaissance;
    }

    public function setDateNaissance(\DateTimeInterface $dateNaissance): self
    {
        $this->dateNaissance = $dateNaissance;

        return $this;
    }


}
