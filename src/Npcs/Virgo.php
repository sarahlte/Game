<?php

namespace Rpg\Game\Npcs;

use Rpg\Game\Items\KnowledgeBook;
use Jugid\Staurie\Game\Npc;

class Virgo extends Npc {
    
    public function name() : string {
        return 'Virgo';
    }

    public function description() : string {
        return 'A serene figure stands before you, dressed in flowing robes of soft green. Her presence exudes calm and wisdom, and she carries a basket filled with herbs and flowers, symbolizing healing and growth.';
    }

    public function speak() : string|array {
        $this->giveItem(new KnowledgeBook());
        return ['Traveler, you\'ve shown me your strength. I am Virgo, keeper of this earth’s knowledge.',
        '(her voice is gentle, filled with compassion and clarity.)',
        'Take this sacred KnowledgeBook, known to help you in your adventure. Use it wisely on your journey.'];
    }

}
