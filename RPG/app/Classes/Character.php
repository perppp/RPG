<?php

namespace App\Classes;

abstract class Character {
    protected $name;
    protected $health;
    protected $attackPower;

    public function __construct($name, $health, $attackPower) {
        $this->name = $name;
        $this->health = $health;
        $this->attackPower = $attackPower;
    }

    public function getName() {
        return $this->name;
    }

    public function getHealth() {
        return $this->health;
    }

    public function takeDamage($damage) {
        $this->health -= $damage;
    }

    abstract public function attack(Character $target);
}