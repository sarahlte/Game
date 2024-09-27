<?php

namespace Rpg\Game\Npcs;

use Rpg\Game\Items\Knowledgebook;
use Jugid\Staurie\Game\Npc;

class Virgo extends Npc {
    public int $limitUse;

    public function name() : string {
        return 'Virgo';
    }

    public function description() : string {
        return 'A serene figure stands before you, dressed in flowing robes of soft green. Her presence exudes calm and wisdom, and she carries a basket filled with herbs and flowers, symbolizing healing and growth.';
    }

    public function speak() : string|array {
        $this->giveItem(new Knowledgebook());
        return ['Traveler, you\'ve shown me your strength. I am Virgo, keeper of this earth’s knowledge.',
        '(her voice is gentle, filled with compassion and clarity.)',
        'Take this sacred KnowledgeBook, known to help you in your adventure. Use it wisely on your journey.'];
    }

    public function heal() : int {
        return 0;
    }

    public function healSpeak() : string|array {
        return [];
    }

    public function setLimitUse() : void {
        $this->limitUse -= 1;
    }
    

}
