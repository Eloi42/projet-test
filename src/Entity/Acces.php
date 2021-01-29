<?php

namespace App\Entity;

use App\Repository\AccesRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=AccesRepository::class)
 */
class Acces
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity=Utilisateur::class, inversedBy="acces")
     * @ORM\JoinColumn(nullable=false)
     */
    private $utilisateurID;

    /**
     * @ORM\ManyToOne(targetEntity=Autorisation::class, inversedBy="acces")
     * @ORM\JoinColumn(nullable=false)
     */
    private $autorisationId;

    /**
     * @ORM\ManyToOne(targetEntity=Document::class, inversedBy="acces")
     * @ORM\JoinColumn(nullable=false)
     */
    private $documentId;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUtilisateurID(): ?Utilisateur
    {
        return $this->utilisateurID;
    }

    public function setUtilisateurID(?Utilisateur $utilisateurID): self
    {
        $this->utilisateurID = $utilisateurID;

        return $this;
    }

    public function getAutorisationId(): ?Autorisation
    {
        return $this->autorisationId;
    }

    public function setAutorisationId(?Autorisation $autorisationId): self
    {
        $this->autorisationId = $autorisationId;

        return $this;
    }

    public function getDocumentId(): ?Document
    {
        return $this->documentId;
    }

    public function setDocumentId(?Document $documentId): self
    {
        $this->documentId = $documentId;

        return $this;
    }
}
