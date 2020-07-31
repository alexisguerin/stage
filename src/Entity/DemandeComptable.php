<?php

namespace App\Entity;

use App\Repository\DemandeComptableRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=DemandeComptableRepository::class)
 */
class DemandeComptable
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
    private $nomdemandeur;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $maildemandeur;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $objet;

    /**
     * @ORM\Column(type="text")
     */
    private $contenu;

    /**
     * @ORM\Column(type="datetime")
     */
    private $datedemande;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomdemandeur(): ?string
    {
        return $this->nomdemandeur;
    }

    public function setNomdemandeur(string $nomdemandeur): self
    {
        $this->nomdemandeur = $nomdemandeur;

        return $this;
    }

    public function getMaildemandeur(): ?string
    {
        return $this->maildemandeur;
    }

    public function setMaildemandeur(string $maildemandeur): self
    {
        $this->maildemandeur = $maildemandeur;

        return $this;
    }

    public function getObjet(): ?string
    {
        return $this->objet;
    }

    public function setObjet(string $objet): self
    {
        $this->objet = $objet;

        return $this;
    }

    public function getContenu(): ?string
    {
        return $this->contenu;
    }

    public function setContenu(string $contenu): self
    {
        $this->contenu = $contenu;

        return $this;
    }

    public function getDatedemande(): ?\DateTimeInterface
    {
        return $this->datedemande;
    }

    public function setDatedemande(\DateTimeInterface $datedemande): self
    {
        $this->datedemande = $datedemande;

        return $this;
    }
    public function __construct()
    {
        $this->datedemande = new \DateTime('now');
    }
}
