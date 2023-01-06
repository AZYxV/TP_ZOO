<?php

namespace App;

class Zoo
{
    // 3 Prpoprieté privé, statique de type Enclosure
    private static ?Enclosure $aquarium = null;
    private static ?Enclosure $aviary = null;
    private static ?Enclosure $fence = null;

    public static function getAquarium(): ?Enclosure
    {
        return self::$aquarium;
    }

    public static function getAviary(): ?Enclosure
    {
        return self::$aviary;
    }

    public static function getFence(): ?Enclosure
    {
        return self::$fence;
    }

    // Fonction me permettant d'ajouter les animaux dans les bon enclos
    public static function addAnimal(Animal $animal): void
    {
        if($animal instanceof CanSwim) {
            if(self::$aquarium === null) {
                self::$aquarium = new Enclosure();
            }
            self::$aquarium->addAnimal($animal);
        } elseif ($animal instanceof CanFly) {
            if(self::$aviary === null) {
                self::$aviary = new Enclosure();
            }
            self::$aviary->addAnimal($animal);
        } elseif ($animal instanceof CanWalk) {
            if(self::$fence === null) {
                self::$fence = new Enclosure();
            }
            self::$fence->addAnimal($animal);
        }
    }

    // Fonction d'affichage des différents enclos
    public static function visitTheZoo(): void
    {
        if(self::$aquarium != null) {
            echo 'Aquarium : '.PHP_EOL;
            echo self::$aquarium;
        }

        if(self::$aviary != null) {
            echo 'Aviary : '.PHP_EOL;
            echo self::$aviary;
        }

        if(self::$fence != null) {
            echo 'Fence : '.PHP_EOL;
            echo self::$fence;
        }
    }
}