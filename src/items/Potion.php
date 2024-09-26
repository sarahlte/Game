<?php

namespace Jugid\Staurie\Example\Items;

use Jugid\Staurie\Game\Item_Equippable;

class Potion extends Item_Equippable {

    public function name() : string {
        return 'Potion';
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