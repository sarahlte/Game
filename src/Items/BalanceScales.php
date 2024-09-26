<?php

namespace Rpg\Game\Items;

use Jugid\Staurie\Game\Item_Equippable;

class BalanceScales extends Item_Equippable {

    public function name() : string {
        return 'Balance Scales';
    }

    public function description(): string
    {
        return 'An artifact that help in dire situations';
    }

    public function body_part(): string { 
        return 'hand';
    }

    public function statistics(): array
    {
        return [
            'chance'=> 99
        ];
    }
}