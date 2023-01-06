<?php

namespace App;

class Parrot extends Animal implements CanFly
{
    public function getNoise(): string
    {
        return "coco";
    }
}