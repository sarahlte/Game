<?php

namespace Rpg\Game\Npcs;

use Rpg\Game\Items\PoisonDagger;
use Rpg\Game\Items\KingRoar;
use Rpg\Game\Items\HornedShield;
use Jugid\Staurie\Game\Npc;

class Scorpio extends Npc {
    
    public function name() : string {
        return 'Scorpio';
    }

    public function description() : string {
        return 'A figure shrouded in darkness stands before you, with sharp eyes that gleam with intensity. Their movements are swift and precise, and a faint aura of danger surrounds them, like a venomous scorpion waiting to strike.';
    }

    public function speak() : string|array {
        $this->giveItem(new PoisonDagger());
        return ['I am Scorpio. Be careful whom you trust in this world, for not all is as it seems.',
        '(their voice is low, filled with an air of mystery and hidden intent.)',
        'Here, take this Poison Dagger. It strikes swiftly and leaves a lasting mark,'];
    }
    
    public function heal() : int {
        return 0;
    }

    public function healSpeak() : string|array {
        return [];
    }
    
}
