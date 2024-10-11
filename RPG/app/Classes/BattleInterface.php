<?php

namespace App\Classes;

interface BattleInterface {
    public function startBattle(Character $character1, Character $character2);
}
