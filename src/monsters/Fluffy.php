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
            'Big Lick' => 100000000000000000,
        ];
    }
}