<?php

namespace App\Entity;

use App\Repository\EtudiantRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=EtudiantRepository::class)
 */
class Etudiant
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $MatriculeEtudiant;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $PrenomEtudiant;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $NomEtudiant;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $MailEtudiant;

    /**
     * @ORM\Column(type="integer")
     */
    private $TelEtudiant;

    /**
     * @ORM\Column(type="date")
     */
    private $NaissanceEtudiant;

    /**
     * @ORM\ManyToOne(targetEntity=TypeEtudiant::class, inversedBy="Chambre")
     */
    private $TypeEtudiant;

    /**
     * @ORM\ManyToOne(targetEntity=Chambre::class, inversedBy="etudiants")
     */
    private $Chambre;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMatriculeEtudiant(): ?string
    {
        return $this->MatriculeEtudiant;
    }

    public function setMatriculeEtudiant(string $MatriculeEtudiant): self
    {
        $this->MatriculeEtudiant = $MatriculeEtudiant;

        return $this;
    }

    public function getPrenomEtudiant(): ?string
    {
        return $this->PrenomEtudiant;
    }

    public function setPrenomEtudiant(string $PrenomEtudiant): self
    {
        $this->PrenomEtudiant = $PrenomEtudiant;

        return $this;
    }

    public function getNomEtudiant(): ?string
    {
        return $this->NomEtudiant;
    }

    public function setNomEtudiant(string $NomEtudiant): self
    {
        $this->NomEtudiant = $NomEtudiant;

        return $this;
    }

    public function getMailEtudiant(): ?string
    {
        return $this->MailEtudiant;
    }

    public function setMailEtudiant(string $MailEtudiant): self
    {
        $this->MailEtudiant = $MailEtudiant;

        return $this;
    }

    public function getTelEtudiant(): ?int
    {
        return $this->TelEtudiant;
    }

    public function setTelEtudiant(int $TelEtudiant): self
    {
        $this->TelEtudiant = $TelEtudiant;

        return $this;
    }

    public function getNaissanceEtudiant(): ?\DateTimeInterface
    {
        return $this->NaissanceEtudiant;
    }

    public function setNaissanceEtudiant(\DateTimeInterface $NaissanceEtudiant): self
    {
        $this->NaissanceEtudiant = $NaissanceEtudiant;

        return $this;
    }

    public function getTypeEtudiant(): ?TypeEtudiant
    {
        return $this->TypeEtudiant;
    }

    public function setTypeEtudiant(?TypeEtudiant $TypeEtudiant): self
    {
        $this->TypeEtudiant = $TypeEtudiant;

        return $this;
    }

    public function getChambre(): ?Chambre
    {
        return $this->Chambre;
    }

    public function setChambre(?Chambre $Chambre): self
    {
        $this->Chambre = $Chambre;

        return $this;
    }
}