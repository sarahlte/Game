<?php

namespace Rpg\Game\Npcs;

use Rpg\Game\Items\MysticFishScale;
use Jugid\Staurie\Game\Npc;

class Pisces extends Npc {
    
    public function name() : string {
        return 'Pisces';
    }

    public function description() : string {
        return 'A serene, twin-like figure, half-submerged in water. Their fish-like tails shimmer with iridescent colors, and their gaze seems to reach into the depths of your soul.';
    }

    public function speak() : string|array {
        $this->giveItem(new MysticFishScale());
        return ['We are two, yet one. Our strength lies in unity, our power in compassion.',
        '(one of the figures gently hands you a shimmering scale from their tail)',
        '(as you receive the scale, both figures merge into the water and disappear, leaving behind a calming energy)'];
    }

}
