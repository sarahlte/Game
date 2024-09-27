<?php

namespace Rpg\Game\Monsters;

use Jugid\Staurie\Game\Monster;

class Goblin extends Monster {

    public function name() : string {
        return 'Goblin';
    }

    public function description(): string { 
        return 'This a vile monster that does not hesitate to harm everything in its path, and its also the weakest monster';
    }

    public function level() : int {
        return 1;
    }

    public function health_points(): int { 
        return 15;
    }

    public function defense(): int { 
        return 2;
    }

    public function experience(): int { 
        return 20;
    }

    public function skills(): array { 
        return [
            'Charge' => 10,
        ];
    }
    public function getAttack(): int
    {
        return 15;
    }
    public function getDefense(): int
    {
        return 5;
    }
    public function getLife(): int
    {
        return 1;
    }
    public function fight(): array {
        return ['attack'=>$this->getAttack(), 'defense'=>$this->getDefense(), 'life'=>$this->getLife()];
    }
}