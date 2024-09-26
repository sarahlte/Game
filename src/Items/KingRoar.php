<?php

namespace Rpg\Game\Items;

use Jugid\Staurie\Game\Item_Equippable;

class KingRoar extends Item_Equippable {

    public function name() : string {
        return "King's Roar";
    }

    public function description(): string
    {
        return "A helmet made of a special stone that look like the head of a lion.";
    }

    public function body_part(): string { 
        return 'head';
    }

    public function statistics(): array
    {
        return [
            'defense'=> 50,
            'beauty'=> 5
        ];
    }
}