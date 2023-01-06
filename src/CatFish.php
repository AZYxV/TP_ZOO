<?php

namespace App;

class CatFish extends Animal implements CanSwim
{
    public function getNoise(): string
    {
        return "bloubloubloub";
    }
}