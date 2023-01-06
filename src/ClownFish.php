<?php

namespace App;

class ClownFish extends Animal implements CanSwim
{
    public function getNoise(): string
    {
        return "bloubloubloub";
    }
}