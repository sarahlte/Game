<?php

namespace Rpg\Game\Npcs;

use Rpg\Game\Items\King;
use Jugid\Staurie\Game\Npc;

class Leo extends Npc {
    
    public function name() : string {
        return 'Leo';
    }

    public function description() : string {
        return 'A majestic figure with the mane of a lion stands tall before you, radiating an aura of confidence and strength. His golden armor gleams, and his piercing eyes seem to command the very air around him.';
    }

    public function speak() : string|array {
        $this->giveItem(new King());
        return ['Ah, a brave soul dares to approach the Lion King.',
        '(his voice is deep and commanding, filled with pride.)',
        'Take this, "King\'s Roar", a sword forged in the heart of the sun. Wield it with honor, or not at all.'];
    }

}
