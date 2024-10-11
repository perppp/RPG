<?php

namespace App\Classes;

class Mage extends Character {
    public function attack(Character $target) {
        $damage = rand(5, 15);
        echo "{$this->getName()} casts a fireball at {$target->getName()} for {$damage} damage.\n";
        $target->takeDamage($damage);
    }
}
