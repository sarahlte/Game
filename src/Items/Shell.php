<?php

namespace Rpg\Game\Items;

use Jugid\Staurie\Game\Item_Equippable;

class Shell extends Item_Equippable {

    public function name() : string {
        return 'Shell';
    }

    public function description(): string
    {
        return 'Shoulder pads that protect you and grant you some strength';
    }

    public function body_part(): string { 
        return 'Shell';
    }

    public function statistics(): array
    {
        return [
            'defense'=> 20,
            'attack'=> 15
        ];
    }
}