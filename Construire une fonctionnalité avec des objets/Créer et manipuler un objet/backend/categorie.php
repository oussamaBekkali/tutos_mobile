<?php
class categorie
{
    public $id;
    public $nom;
    public $couleur;
    public $icon;

    public function __construct($id, $nom, $couleur, $icon)
    {
        $this->id = $id;
        $this->nom = $nom;
        $this->couleur = $couleur;
        $this->icon = $icon;
    }

    public function afficher()
    {
        echo "-Nom " . $this->nom;
        echo " -Couleur " . $this->couleur;
        echo " -Icone " . $this->icon;
    }
};
