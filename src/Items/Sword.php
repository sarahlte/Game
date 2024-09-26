<?php

namespace Rpg\Game\Items;

use Jugid\Staurie\Game\Item_Equippable;

class Sword extends Item_Equippable {

    public function name() : string {
        return 'Sword';
    }

    public function description(): string
    {
        return 'A wonky sword made of stone.';
    }

    public function body_part(): string { 
        return 'hand';
    }

    public function statistics(): array
    {
        return [
            'chance'=> 2,
            'wisdom'=> 2
        ];
    }
}