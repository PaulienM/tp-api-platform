<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/**
 * Emploi
 *
 * @ORM\Table(name="EMPLOI", uniqueConstraints={@ORM\UniqueConstraint(name="EMPLOYE_SOCIETE_UNIQUE", columns={"ID_EMPLOYE", "ID_SOCIETE"})}, indexes={@ORM\Index(name="EMPLOI_SOCIETE_FK", columns={"ID_SOCIETE"}), @ORM\Index(name="IDX_8458777CD47005A0", columns={"ID_EMPLOYE"})})
 * @ORM\Entity
 * @ApiResource()
 */
class Emploi
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
     * @var float
     *
     * @ORM\Column(name="TPS_TRAVAIL", type="float", precision=10, scale=0, nullable=false, options={"default"="35"})
     */
    private $tpsTravail = '35';

    /**
     * @var string
     *
     * @ORM\Column(name="TPS_PARTIEL", type="string", length=1, nullable=false, options={"fixed"=true})
     */
    private $tpsPartiel = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="SALAIRE", type="float", precision=10, scale=0, nullable=false)
     */
    private $salaire;

    /**
     * @var \Employe
     *
     * @ORM\ManyToOne(targetEntity="Employe")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID_EMPLOYE", referencedColumnName="ID")
     * })
     */
    private $idEmploye;

    /**
     * @var \Societe
     *
     * @ORM\ManyToOne(targetEntity="Societe")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID_SOCIETE", referencedColumnName="ID")
     * })
     */
    private $idSociete;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTpsTravail(): ?float
    {
        return $this->tpsTravail;
    }

    public function setTpsTravail(float $tpsTravail): self
    {
        $this->tpsTravail = $tpsTravail;

        return $this;
    }

    public function getTpsPartiel(): ?string
    {
        return $this->tpsPartiel;
    }

    public function setTpsPartiel(string $tpsPartiel): self
    {
        $this->tpsPartiel = $tpsPartiel;

        return $this;
    }

    public function getSalaire(): ?float
    {
        return $this->salaire;
    }

    public function setSalaire(float $salaire): self
    {
        $this->salaire = $salaire;

        return $this;
    }

    public function getIdEmploye(): ?Employe
    {
        return $this->idEmploye;
    }

    public function setIdEmploye(?Employe $idEmploye): self
    {
        $this->idEmploye = $idEmploye;

        return $this;
    }

    public function getIdSociete(): ?Societe
    {
        return $this->idSociete;
    }

    public function setIdSociete(?Societe $idSociete): self
    {
        $this->idSociete = $idSociete;

        return $this;
    }


}
