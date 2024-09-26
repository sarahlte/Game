<?php

namespace src\Npcs;

use Jugid\Staurie\Example\Items\Shield;
use Jugid\Staurie\Game\Npc;

class Aries extends Npc {

    public function name() : string {
        return 'Aries';
    }

    public function description() : string {
        return 'A man with his face hidden by his long hair… A mysterious aura emanates from him.';
    }

    public function speak() : string|array {
        return 'Heus adolescentulo, quod te mihi fatum attulit';
    }

}