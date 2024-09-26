<?php

namespace Rpg\Game\Items;

use Jugid\Staurie\Game\Item_Equippable;

class Shield extends Item_Equippable {

    public function name() : string {
        return 'Shield';
    }

    public function description(): string
    {
        return 'Grants you +5 in defense.';
    }

    public function body_part(): string { 
        return 'shield';
    }

    public function statistics(): array
    {
        return [
            'defense'=> 5
        ];
    }
}