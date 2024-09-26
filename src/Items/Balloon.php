<?php

namespace Rpg\Game\Items;

use Jugid\Staurie\Game\Item_Equippable;

class Balloon extends Item_Equippable {

    public function name() : string {
        return 'Balloon';
    }

    public function description(): string
    {
        return 'A wonky Balloon made of plastic.';
    }

    public function body_part(): string { 
        return 'hand';
    }

    public function statistics(): array
    {
        return [
            'chance'=> 99,
            'ability'=>99,
            'wisdom'=> 99,
            'defense'=>99
        ];
    }
}