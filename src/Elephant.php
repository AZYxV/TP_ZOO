<?php

namespace App;

class Elephant extends Animal implements CanWalk
{
    public function getNoise(): string
    {
        return "toooooooot";
    }
}