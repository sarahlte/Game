<?php

namespace Rpg\Game\Items;

use Jugid\Staurie\Game\Item_Equippable;

class HornedShield extends Item_Equippable {

    public function name() : string {
        return 'Horned Shield';
    }

    public function description(): string
    {
        return 'A mythical shield, Grants you +50 in defense.';
    }

    public function body_part(): string { 
        return 'shield';
    }

    public function statistics(): array
    {
        return [
            'defense'=> 50
        ];
    }
}