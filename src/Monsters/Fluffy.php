<?php

namespace src\Monsters;

use Jugid\Staurie\Game\Monster;

class Fluffy extends Monster {

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