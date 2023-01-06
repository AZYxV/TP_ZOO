<?php
namespace App;

class Fish extends Animal implements CanSwim
{
    public function getNoise(): string
    {
        return "bloubloubloub";
    }
}