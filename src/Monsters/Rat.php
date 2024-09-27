<?php

namespace Rpg\Game\Monsters;

use Jugid\Staurie\Game\Monster;

class Rat extends Monster {
    private $life = 20;

    public function name() : string {
        return 'Rat';
    }

    public function description(): string { 
        return 'A giant sewer rat that scurries through the shadows, known for its quick movements and tendency to bite.';
    }

    public function level() : int {
        return 1;
    }

    public function health_points(): int { 
        return $this->life;
    }

    public function defense(): int { 
        return 1;
    }

    public function experience(): int { 
        return 10;
    }

    public function skills(): array { 
        return [
            'Bite' => 2,
            'Poisonous Bite' => 1,
        ];
    }

    public function getAttack(): int
    {
        return 2; 
    }

    public function getDefense(): int
    {
        return 1; 
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
