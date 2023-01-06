<?php
namespace App;

require __DIR__ . '/vendor/autoload.php';

 $animals = [];

 // Fish
 for($i=1;$i<=5;$i++) {
     $animals[] = new Fish("Fish $i");
 }

 // BubbleFish
for($i=1;$i<=3;$i++) {
    $animals[] = new BubbleFish("BubbleFish $i");
}

 // CatFish
for($i=1;$i<=2;$i++) {
    $animals[] = new Fish("CatFish $i");
}
 // ClownFish
$animals[] = new ClownFish("ClownFish");

// Elephant
for($i=1;$i<=2;$i++) {
    $animals[] = new Elephant("Elephant $i");
}

// Zebra
$animals[] = new Zebra("Zebra");

 // Parrot
for($i=1;$i<=10;$i++) {
    $animals[] = new Parrot("Parrot $i");
}

// Dove
for($i=1;$i<=2;$i++) {
    $animals[] = new Dove("Dove $i");
}

foreach ($animals as $animal){
    echo 'Le '.$animal->getName().' fait '.$animal->noise()."\n";
}
