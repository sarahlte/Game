<?php

namespace Rpg\Game\Items;

use Jugid\Staurie\Game\Item_Equippable;

class WaterVessel extends Item_Equippable {

    public function name() : string {
        return 'Water Vessel';
    }

    public function description(): string
    {
        return 'An ornate vessel filled with never-ending water. It possesses healing and restorative properties.';
    }

    public function body_part(): string { 
        return 'hand';
    }

    public function statistics(): array
    {
        return [
            'healing' => 10,
            'resilience' => 3
        ];
    }
}
