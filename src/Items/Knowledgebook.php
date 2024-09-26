<?php

namespace Rpg\Game\Items;

use Jugid\Staurie\Game\Item_Equippable;

class Knowledgebook extends Item_Equippable {

    public function name() : string {
        return 'Knowledgebook';
    }

    public function description(): string
    {
        return 'An old book. Some pages are torn and the cover is faded. You\'ll learn everything you need to know about the language of this world.';
    }

    public function body_part(): string { 
        return 'hand';
    }

    public function statistics(): array
    {
        return [
            'wisdom'=> 10,
        ];
    }
}