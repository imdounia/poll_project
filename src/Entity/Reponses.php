<?php

namespace App\Entity;

use App\Repository\ReponsesRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ReponsesRepository::class)
 */
class Reponses
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $text_reponse;

    /**
     * @ORM\ManyToOne(targetEntity=Questions::class)
     */
    private $questions;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTextReponse(): ?string
    {
        return $this->text_reponse;
    }

    public function setTextReponse(string $text_reponse): self
    {
        $this->text_reponse = $text_reponse;

        return $this;
    }

    public function getQuestions(): ?Questions
    {
        return $this->questions;
    }

    public function setQuestions(?Questions $questions): self
    {
        $this->questions = $questions;

        return $this;
    }
    public function __toString() {
        return $this->id;
    }
}
