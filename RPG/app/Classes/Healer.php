<?php

namespace App\Classes;

class Healer extends Character {
    public function attack(Character $target) {
        if ($this->getHealth() < 50) {
            echo "{$this->getName()} heals themselves for {$this->attackPower} health.\n";
            $this->health += $this->attackPower;
        } else {
            $damage = rand(5, 15);
            echo "{$this->getName()} casts a spell at {$target->getName()} for {$damage} damage.\n";
            $target->takeDamage($damage);
        }
    }
}
