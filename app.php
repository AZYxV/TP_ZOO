<?php
namespace App;

require __DIR__ . '/vendor/autoload.php';

 // Création de boucle for pour ajouter mes instances d'animaux dans la fonction addAnimal

 // Fish
 for($i=1;$i<=5;$i++) {
     Zoo::addAnimal(new Fish("Fish $i"));
 }

 // BubbleFish
for($i=1;$i<=3;$i++) {
    Zoo::addAnimal(new BubbleFish("BubbleFish $i"));
}

 // CatFish
for($i=1;$i<=2;$i++) {
    Zoo::addAnimal(new CatFish("CatFish $i"));
}
 // ClownFish
    Zoo::addAnimal(new ClownFish("ClownFish"));

// Elephant
for($i=1;$i<=2;$i++) {
    Zoo::addAnimal(new Elephant("Elephant $i"));
}

// Zebra
Zoo::addAnimal(new Zebra("Zebra"));

 // Parrot
for($i=1;$i<=10;$i++) {
    Zoo::addAnimal(new Parrot("Parrot $i"));
}

// Dove
for($i=1;$i<=2;$i++) {
    Zoo::addAnimal(new Dove("Dove $i"));
}

// J'affiche la liste des différents enclos

echo Zoo::visitTheZoo();