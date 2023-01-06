<?php

namespace App;

class Zebra extends Animal implements CanWalk
{
    public function getNoise(): string
    {
        return "hiiiiiii";
    }
}