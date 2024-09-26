<?php

namespace Rpg\Game\Npcs;

use Jugid\Staurie\Example\Items\Potion;
use Jugid\Staurie\Game\Npc;

class Aries extends Npc {

    public function name() : string {
        return 'Aries';
    }

    public function description() : string {
        return 'A man with his face hidden by his long white hair… Big horns are adorning his head. A mysterious aura emanates from him.';
    }

    public function speak() : string|array {
        $this->giveItem(new Potion());
        return ['Heus adolescentulo, quod te mihi fatum attulit',
        '(the man seems to speak a language you do not understand.) (he ends up giving you a shield and disappearing.)',
        '(not understanding a thing, you choose to take the shield and continue on your adventure)'];
    }

}