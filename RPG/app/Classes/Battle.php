<?php

namespace App\Classes;

class Battle implements BattleInterface {
    public function startBattle(Character $character1, Character $character2) {
        while ($character1->getHealth() > 0 && $character2->getHealth() > 0) {
            $character1->attack($character2);
            echo "{$character2->getName()} has {$character2->getHealth()} HP left.\n";

            if ($character2->getHealth() <= 0) {
                echo "{$character2->getName()} has been defeated!\n";
                return;
            }

            $character2->attack($character1);
            echo "{$character1->getName()} has {$character1->getHealth()} HP left.\n";

            if ($character1->getHealth() <= 0) {
                echo "{$character1->getName()} has been defeated!\n";
                return;
            }
        }
    }
}
