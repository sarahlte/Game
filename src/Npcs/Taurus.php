<?php

namespace Rpg\Game\Npcs;

use Rpg\Game\Items\HornedShield;
use Jugid\Staurie\Game\Npc;

class Taurus extends Npc {
    private int $limitUse = 0;

    public function name() : string {
        return 'Taurus';
    }

    public function description() : string {
        return 'A powerful bull-like creature stands before you, muscles rippling under its thick hide. Its eyes gleam with determination as it sizes you up.';
    }

    public function speak() : string|array {
        $this->giveItem(new HornedShield());
        return ['Salve, traveler. I am Taurus, guardian of the ancient grove.',
        '(the creature speaks in a deep, resonant voice that echoes through the clearing.)',
        '(it offers you a sturdy shield, a token of its protection.)'];
    }
    
    public function heal() : int {
        return 0;
    }

    public function healSpeak() : string|array {
        return [];
    }

    public function getLimitUse() : int
    {
        return $this->limitUse;
    }

    public function setLimitUse() : void {
        $this->limitUse -= 1;
    }
    

}
