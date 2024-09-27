<?php

namespace Rpg\Game\Monsters;

use Jugid\Staurie\Game\Monster;

class IronSlime extends Monster {
    private $life = 12;

    public function name() : string {
        return 'Iron Slime';
    }

    public function description(): string { 
        return 'A robust and tough slime that is infused with iron, making it significantly stronger and harder to defeat.';
    }

    public function level() : int {
        return 2;
    }

    public function health_points(): int { 
        return $this->life;
    }

    public function defense(): int { 
        return 2;
    }

    public function experience(): int { 
        return 20; 
    }

    public function skills(): array { 
        return [
            'Iron Slam' => 4, 
            'Slime Shot' => 3, 
        ];
    }

    public function getAttack(): int
    {
        return 4; 
    }

    public function getDefense(): int
    {
        return 2; 
    }

    public function getLife($damage): int
    {
        $this->life -= $damage;
        return $this->life;
    }

    public function fight() : array {
        return [];
    }

}
