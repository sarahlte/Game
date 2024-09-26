<?php

namespace Rpg\Game\Items;

use Jugid\Staurie\Game\Item_Equippable;

class Peeble extends Item_Equippable {

    public function name() : string {
        return 'peeble';
    }

    public function description(): string
    {
        return 'A useless item';
    }

    public function body_part(): string { 
        return 'hand';
    }

    public function statistics(): array
    {
        return [];
    }
}