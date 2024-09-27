<?php

namespace Rpg\Game\Items;

use Jugid\Staurie\Game\Item;

class Riddle extends Item {

    public function name() : string {
        return 'Riddle';
    }

    public function description(): string
    {
        return 'I whisper and sing, but you\'ll never be able to catch me. Who am I ?';
    }
}