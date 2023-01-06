<?php
namespace App;

class BubbleFish extends Animal implements CanSwim
{
    // Fonction getNoise() pour définir le son de l'animal
    public function getNoise(): string
    {
        return "bloubloubloub";
    }
}