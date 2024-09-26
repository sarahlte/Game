<?php

namespace Rpg\Game\Items;

use Jugid\Staurie\Game\Item_Equippable;

class Bow extends Item_Equippable {

    public function name() : string {
        return 'Bow';
    }

    public function description(): string
    {
        return 'A golden bow. You can now shoot enemies from afar. Grants you +15 in attack.';
    }

    public function body_part(): string { 
        return 'shield';
    }

    public function statistics(): array
    {
        return [
            'attack'=> 50
        ];
    }
}