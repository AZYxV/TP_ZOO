<?php
namespace App;

class BubbleFish extends Animal implements CanSwim
{
    public function getNoise(): string
    {
        return "bloubloubloub";
    }
}