<?php

namespace Rpg\Game\Monsters;

use Jugid\Staurie\Game\Monster;

class Bats extends Monster {

    public function name() : string {
        return 'Bats';
    }

    public function description(): string { 
        return 'The minions of the named boss Batman';
    }

    public function level() : int {
        return 3;
    }

    public function health_points(): int { 
        return 20;
    }

    public function defense(): int { 
        return 4;
    }

    public function experience(): int { 
        return 50;
    }

    public function skills(): array { 
        return [
            'Bite' => 6,
        ];
    }
    public function getAttack(): int
    {
        return 6;
    }
    public function getDefense(): int
    {
        return 4;
    }
    public function getLife(): int
    {
        return 20;
    }
    public function fight(): array {
        return ['attack'=>$this->getAttack(), 'defense'=>$this->getDefense(), 'life'=>$this->getLife()];
    }
}