<?php

namespace Rpg\Game\Monsters;

use Jugid\Staurie\Game\Monster;

class Batman extends Monster {
    private $life = 100;

    public function name() : string {
        return 'Batman';
    }

    public function description(): string { 
        return 'The named boss Batman';
    }

    public function level() : int {
        return 5;
    }

    public function health_points(): int { 
        return 100;
    }

    public function defense(): int { 
        return 2;
    }

    public function experience(): int { 
        return 150;
    }

    public function skills(): array { 
        return [
            'Sucking' => 10,
        ];
    }
    public function getAttack(): int
    {
        return 10;
    }
    public function getDefense(): int
    {
        return 2;
    }
    public function getLife($damage): int
    {
        return 100;
    }

    public function fight() : array {
        return [];
    }
    
}