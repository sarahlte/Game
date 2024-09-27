<?php

namespace Rpg\Game\Items;

use Jugid\Staurie\Game\Item_Equippable;

class MagicHorn extends Item_Equippable {

    public function name() : string {
        return 'Magic Horn';
    }

    public function description(): string
    {
        return 'A mystical horn imbued with ancient powers. It hums with energy when held.';
    }

    public function body_part(): string { 
        return 'hand';
    }

    public function statistics(): array
    {
        return [
            'strength' => 4,
            'magic' => 5
        ];
    }
}
