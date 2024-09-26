<?php

namespace Rpg\Game\Items;

use Jugid\Staurie\Game\Item_Equippable;

class PoisonDagger extends Item_Equippable {

    public function name() : string {
        return "Poison Dagger";
    }

    public function description(): string
    {
        return "A dagger with a point of poison on it";
    }

    public function body_part(): string { 
        return 'hand';
    }

    public function statistics(): array
    {
        return [
            'attack'=> 50,
            'poison'=> 15
        ];
    }
}