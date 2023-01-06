<?php
namespace App;

abstract class Animal {

    // Déclaration d'une proprieté privé de type string
    private string $name;

    public function __construct(string $name)
    {
        $this->name=$name;
    }

    // Fonction qui me permet de récupérer le nom de l'animal
    public function getName()
    {
        return $this->name;
    }

    // Fonction qui me servira dans les class d'animaux pour definir leur "son"
    protected abstract function getNoise(): string;

    // Fonction pour afficher le son des animaux
    public function noise(): string
    {
        return $this->getNoise();
    }
}