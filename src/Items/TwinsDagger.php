<?php

namespace Rpg\Game\Items;

use Jugid\Staurie\Game\Item_Equippable;

class TwinsDagger extends Item_Equippable {

    public function name() : string {
        return 'Twins_dagger';
    }

    public function description(): string
    {
        return 'A finely crafted twins dagger made of a special stone.';
    }

    public function body_part(): string { 
        return 'hand';
    }

    public function statistics(): array
    {
        return [
            'chance'=> 15,
            'wisdom'=> 5, 
            'agility'=>35
        ];
    }
}