<?php

namespace Rpg\Game\Npcs;

use Rpg\Game\Items\Shield;
use Jugid\Staurie\Game\Npc;

class Aries extends Npc {
    
    public function name() : string {
        return 'Aries';
    }

    public function description() : string {
        return 'A man with his face hidden by his long white hair… Big horns are adorning his head. A mysterious aura emanates from him.';
    }

    public function speak() : string|array {
        $this->giveItem(new Shield());
        return ['Heus adolescentulo, quod te mihi fatum attulit',
        '(the man seems to speak a language you do not understand.) (he ends up giving you a shield and disappearing.)',
        '(not understanding a thing, you choose to take the shield and continue on your adventure)'];
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