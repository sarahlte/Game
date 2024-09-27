<?php

namespace Rpg\Game\Npcs;

use Rpg\Game\Items\Shell;
use Jugid\Staurie\Game\Npc;

class Cancer extends Npc {
    private int $limitUse = 0;

    public function name() : string {
        return 'Cancer';
    }

    public function description() : string {
        return 'A large crab-like creature emerges from the shadows, its hard shell glistening in the dim light. Its movements are slow but deliberate, as it surveys its surroundings with caution.';
    }

    public function speak() : string|array {
        $this->giveItem(new Shell());
        return ['Be careful, wanderer. The world can be as harsh as the waves.',
        '(the creature speaks in a calm, low tone, its pincers clicking softly as it offers you a shell. It can probable adorn your shoulders.)',
        '(you take the shell, feeling its weight and the protection it might provide.)'];
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
