<?php

namespace Rpg\Game\Npcs;

use Rpg\Game\Items\KingRoar;
use Jugid\Staurie\Game\Npc;

class Leo extends Npc {
    private int $limitUse = 0;

    public function name() : string {
        return 'Leo';
    }

    public function description() : string {
        return 'A majestic figure with the mane of a lion stands tall before you, radiating an aura of confidence and strength. His golden armor gleams, and his piercing eyes seem to command the very air around him.';
    }

    public function speak() : string|array {
        $this->giveItem(new KingRoar());
        return ['Ah, a brave soul dares to approach the Lion King.',
        '(his voice is deep and commanding, filled with pride.)',
        'Take this, "King\'s Roar", a sword forged in the heart of the sun. Wield it with honor, or not at all.'];
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

    public function setLimitUse() : void 
    {
        $this->limitUse -= 1;    
    }


}
