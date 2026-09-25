<?php

class Categorie
{
    private int $id;
    private string $nom;
    private string $couleur;
    private string $icon;

    public function getId(): int
    {
        return $this->id;
    }

    public function getNom(): string
    {
        return $this->nom;
    }

    public function getCouleur(): string
    {
        return $this->couleur;
    }

    public function getIcon(): string
    {
        return $this->icon;
    }

    public function setId(int $nId): void
    {
        $this->id = $nId;
    }

    public function setNom(string $nNom): void
    {
        if (strlen($nNom) > 2) {
            $this->nom = $nNom;
        } else {
            echo "Erreur : Nom trop court !<br>";
        }
    }

    public function setCouleur(string $nCouleur): void
    {
        if (strlen($nCouleur) > 2) {
            $this->couleur = $nCouleur;
        } else {
            echo "Erreur : Couleur trop courte !<br>";
        }
    }

    public function setIcon(string $nIcon): void
    {
        if (strlen($nIcon) > 2) {
            $this->icon = $nIcon;
        } else {
            echo "Erreur : Icône trop courte !<br>";
        }
    }
}
