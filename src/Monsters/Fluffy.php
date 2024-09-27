<?php

namespace src\Monsters;

use Jugid\Staurie\Game\Monster;

class Fluffy extends Monster {
    private $life = 5000;

    public function name() : string {
        return 'Fluffy';
    }

    public function description(): string { 
        return "The cutest thing alive, WARNING don't touch";
    }

    public function level() : int {
        return 50;
    }

    public function health_points(): int { 
        return 5000;
    }

    public function defense(): int { 
        return 100;
    }

    public function experience(): int { 
        return 10000000;
    }

    public function skills(): array { 
        return [
            'Big Lick' => 1000,
        ];
    }
    public function getAttack(): int
    {
        return 1000;
    }
    public function getDefense(): int
    {
        return 100;
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