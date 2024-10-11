<?php

namespace App\Console\Commands;

use App\Classes\Warrior;
use App\Classes\Mage;
use App\Classes\Healer;
use App\Classes\Battle;
use Illuminate\Console\Command;

class SimulateBattle extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:simulate-battle';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $warrior = new Warrior("Lazare", 100, 15);
        $mage = new Mage("Gandalf", 80, 20);
        $healer = new Healer("Healing Luka", 90, 10);

        $battle = new Battle();
        
        $battle->startBattle($warrior, $mage);
    }
}
