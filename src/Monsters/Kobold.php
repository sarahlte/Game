<?php

namespace Rpg\Game\Monsters;

use Jugid\Staurie\Game\Monster;

class Kobold extends Monster {

    public function name() : string {
        return 'Kobold';
    }

    public function description(): string { 
        return 'This monster look like a dog but is as powerful as an adult human';
    }

    public function level() : int {
        return 2;
    }

    public function health_points(): int { 
        return 15;
    }

    public function defense(): int { 
        return 3;
    }

    public function experience(): int { 
        return 30;
    }

    public function skills(): array { 
        return [
            'Claw Strike' => 5,
        ];
    }


    public function getAttack(): int
    {
        return 3;
    }
    public function getDefense(): int
    {
        return 3;
    }
    public function getLife(): int
    {
        return 15;
    }
    public function fight(): array {
        return ['attack'=>$this->getAttack(), 'defense'=>$this->getDefense(), 'life'=>$this->getLife()];
    }

}