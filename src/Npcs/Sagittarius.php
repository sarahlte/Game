<?php

namespace Rpg\Game\Npcs;

use Rpg\Game\Items\Bow;
use Jugid\Staurie\Game\Npc;

class Sagittarius extends Npc {
    
    public function name() : string {
        return 'Sagittarius';
    }

    public function description() : string {
        return 'A creature, half-man, half-horse, stands before you, bow in hand. His eyes are bright and his smile great.';
    }

    public function speak() : string|array {
        $this->giveItem(new Boow());
        return ['Well done, traveler, you treuly deserve to hunt by my side.',
        '(the big hands of the man handle you a golden bow.)'];
    }

}
