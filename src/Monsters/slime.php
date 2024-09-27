<?php

namespace Rpg\Game\Monsters;

use Jugid\Staurie\Game\Monster;

class Slime extends Monster {

    public function name() : string {
        return 'Slime';
    }

    public function description(): string { 
        return 'A gooey creature that oozes across the ground, capable of engulfing its prey.';
    }

    public function level() : int {
        return 1;
    }

    public function health_points(): int { 
        return 8;
    }

    public function defense(): int { 
        return 1;
    }

    public function experience(): int { 
        return 15;
    }

    public function skills(): array { 
        return [
            'Slime Shot' => 3,
        ];
    }

    public function getAttack(): int
    {
        return 3;
    }

    public function getDefense(): int
    {
        return 1;
    }

    public function getLife($damage): int
    {
        return 8 - $damage;
    }

}
