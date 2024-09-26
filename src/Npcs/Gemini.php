<?php

namespace Rpg\Game\Npcs;

use Rpg\Game\Items\TwinsDagger;
use Jugid\Staurie\Game\Npc;

class Gemini extends Npc {
    
    public function name() : string {
        return 'Gemini';
    }

    public function description() : string {
        return 'Two identical figures stand before you, mirroring each other\'s movements. Their faces are hidden by masks, one light and one dark, representing duality in perfect harmony.';
    }

    public function speak() : string|array {
        $this->giveItem(new TwinsDagger());
        return ['Greetings, traveler. We are Gemini, the twins of duality.',
        '(the twins speak in unison, their voices blending into one.)',
        '(they hand you a finely crafted twins dagger, symbolizing their sharpness and precision in battle.)'];
    }

}
