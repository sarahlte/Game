<?php

namespace Rpg\Game\Items;

use Jugid\Staurie\Game\Item_Equippable;

class MysticFishScale extends Item_Equippable {

    public function name() : string {
        return 'Mystic Fish Scale';
    }

    public function description(): string
    {
        return 'A shimmering scale from a mystical fish. It glows faintly, filled with protective energy.';
    }

    public function body_part(): string { 
        return 'hand';
    }

    public function statistics(): array
    {
        return [
            'protection' => 7,
            'wisdom' => 3
        ];
    }
}
