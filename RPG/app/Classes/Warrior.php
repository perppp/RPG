<?php

namespace App\Classes;

class Warrior extends Character {
    public function attack(Character $target) {
        $damage = rand(10, 20);
        echo "{$this->getName()} swings a sword at {$target->getName()} for {$damage} damage.\n";
        $target->takeDamage($damage);
    }
}
