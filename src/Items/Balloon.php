<?php

namespace Rpg\Game\Items;

use Jugid\Staurie\Game\Item_Equippable;

class Balloon extends Item_Equippable {

    public function name() : string {
        return 'v';
    }

    public function description(): string
    {
        return '';
    }

    public function body_part(): string { 
        return 'hand';
    }

    public function statistics(): array
    {
        return [
            'attack'=> 9999,
            'health'=>9999,
            'wisdom'=> 9999,
            'defense'=>9999
        ];
    }
}