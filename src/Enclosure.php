<?php

namespace App;

class Enclosure
{
    private array $animals;

    public function addAnimal(Animal $animals): void
    {
        $this->animals[] = $animals;
    }

    // Mise en forme de l'affichage des animaux et de leur son
    public function __toString(): string
    {
        $output = '';
        foreach ($this->animals as $animal){
            $output .= 'Le '.$animal->getName().' fait '.$animal->noise().PHP_EOL;
        }

        return $output;
    }
}
