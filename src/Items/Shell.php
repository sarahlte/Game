<?php

namespace Rpg\Game\Items;

use Jugid\Staurie\Game\Item_Equippable;

class Shell extends Item_Equippable {

    public function name() : string {
        return 'Shell';
    }

    public function description(): string
    {
        return 'Grants you +15 in defense.';
    }

    public function body_part(): string { 
        return 'Shell';
    }

    public function statistics(): array
    {
        return [
            'defense'=> 15,
            'slippery'=> 50
        ];
    }
}