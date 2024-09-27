<?php

namespace Rpg\Game\Monsters;

use Jugid\Staurie\Game\Monster;

class Chompi extends Monster {
    private $life = 30;

    public function name() : string {
        return 'Chompi';
    }

    public function description(): string { 
        return 'A vile mushroom that may poison you if you are not wary of it';
    }

    public function level() : int {
        return 5;
    }

    public function health_points(): int { 
        return $this->life;
    }

    public function defense(): int { 
        return 5;
    }

    public function experience(): int { 
        return 75;
    }

    public function skills(): array { 
        return [
            'Spore' => 7,
        ];
    }
    public function getAttack(): int
    {
        return 7;
    }
    public function getDefense(): int
    {
        return 5;
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