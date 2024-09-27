<?php

namespace Rpg\Game\Npcs;

use Rpg\Game\Items\BalanceScales;
use Jugid\Staurie\Game\Npc;

class Libra extends Npc {
    
    public function name() : string {
        return 'Libra';
    }

    public function description() : string {
        return 'A graceful figure, draped in silver robes, holds a pair of finely crafted scales in their hands. Their calm demeanor and piercing gaze give the impression of someone who seeks balance and justice in all things.';
    }

    public function speak() : string|array {
        $this->giveItem(new BalanceScales());
        return ['Greetings, seeker of truth. I am Libra, the guardian of balance and justice.',
        '(their voice is measured and calm, like a judge weighing every word.)',
        'Take these scales, a symbol of balance. Use them to weigh your decisions carefully, for every choice bears a consequence.'];
    }

    
    public function heal() : int {
        return 0;
    }

    public function healSpeak() : string|array {
        return [];
    }

    public function limitUse() : int {
        return 0;
    }


}
