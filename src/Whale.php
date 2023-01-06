<?php

namespace App;

class Whale extends Animal implements CanSwim
{
    public function getNoise(): string
    {
        return "splash";
    }
}