<?php

namespace App\Entity;

use App\Repository\FactureRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=FactureRepository::class)
 */
class Facture
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $numfacture;

    /**
     * @ORM\Column(type="date")
     */
    private $dateFacture;

    /**
     * @ORM\Column(type="integer")
     */
    private $kmCompteur;

    /**
     * @ORM\Column(type="integer")
     */
    private $montantHT;

    /**
     * @ORM\Column(type="integer")
     */
    private $montantTTC;

    /**
     * @ORM\ManyToOne(targetEntity=Client::class, inversedBy="factures")
     */
    private $Client;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNumfacture(): ?int
    {
        return $this->numfacture;
    }

    public function setNumfacture(int $numfacture): self
    {
        $this->numfacture = $numfacture;

        return $this;
    }

    public function getDateFacture(): ?\DateTimeInterface
    {
        return $this->dateFacture;
    }

    public function setDateFacture(\DateTimeInterface $dateFacture): self
    {
        $this->dateFacture = $dateFacture;

        return $this;
    }

    public function getKmCompteur(): ?int
    {
        return $this->kmCompteur;
    }

    public function setKmCompteur(int $kmCompteur): self
    {
        $this->kmCompteur = $kmCompteur;

        return $this;
    }

    public function getMontantHT(): ?int
    {
        return $this->montantHT;
    }

    public function setMontantHT(int $montantHT): self
    {
        $this->montantHT = $montantHT;

        return $this;
    }

    public function getMontantTTC(): ?int
    {
        return $this->montantTTC;
    }

    public function setMontantTTC(int $montantTTC): self
    {
        $this->montantTTC = $montantTTC;

        return $this;
    }

    public function getClient(): ?Client
    {
        return $this->Client;
    }

    public function setClient(?Client $Client): self
    {
        $this->Client = $Client;

        return $this;
    }
}
