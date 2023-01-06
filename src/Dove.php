<?php

namespace App;

class Dove extends Animal implements CanFly
{
    public function getNoise(): string
    {
        return "Rou Rouuuu";
    }
}