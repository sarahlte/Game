<?php

namespace Rpg\Game\Npcs;

use Rpg\Game\Items\WaterVessel;
use Jugid\Staurie\Game\Npc;

class Aquarius extends Npc {
    private int $limitUse;

    public function name() : string {
        return 'Aquarius';
    }

    public function description() : string {
        return 'A figure cloaked in flowing robes, carrying a large, ornate vessel. Water constantly pours from the vessel, yet it never empties.';
    }

    public function speak() : string|array {
        $this->giveItem(new WaterVessel());
        return ['The flow of time is like the water I bear. Endless, yet it nourishes all.',
        '(Aquarius dips the vessel, offering you a small portion of the mystical water)',
        '(as you take it, the figure vanishes into mist, leaving behind the vessel as a gift for your journey)'];
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
