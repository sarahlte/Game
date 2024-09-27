<?php

namespace Rpg\Game\Npcs;

use Jugid\Staurie\Game\Npc;

class Healer extends Npc {
    
    public function name() : string {
        return 'Healer';
    }

    public function description() : string {
        return 'A woman with a gentle smile. Her red hair are braided and her gentle green eyes seem to shine in the forest.';
    }

    public function speak() : string|array {
        return ['Hello, traveler. You must be tired, right ? Here, let me help.', 
        '(you gained +10 health)'];
    }

}