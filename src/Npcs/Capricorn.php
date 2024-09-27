<?php

namespace Rpg\Game\Npcs;

use Rpg\Game\Items\MagicHorn;
use Jugid\Staurie\Game\Npc;

class Capricorn extends Npc {
    
    public function name() : string {
        return 'Capricorn';
    }

    public function description() : string {
        return 'A tall figure with the body of a human and the tail of a fish. His eyes shimmer with wisdom, and he carries an aura of quiet strength.';
    }

    public function speak() : string|array {
        $this->giveItem(new MagicHorn());
        return ['Salve viator, you are wise to seek the path of perseverance.',
        '(the creature gestures to the ground, revealing an ancient horn glimmering in the light)',
        '(without saying more, he vanishes, leaving you with the horn and a deep sense of purpose)'];
    }

}
