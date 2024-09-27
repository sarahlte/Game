<?php

namespace Rpg\Game\Npcs;

use Rpg\Game\Items\Riddle;
use Jugid\Staurie\Game\Npc;

class Crow extends Npc {
  public int $limitUse;

    public function name() : string {
        return 'Crow';
    }

    public function description() : string {
        return 'A lazy black bird.';
    }

    public function speak() : string|array {
        if ($this->playerHasItem('Riddle')) {
          return ['You solved the riddle ?',
          'Congrats, I guess.', 
          'The answer was "the wind".', 
          'Don\'t look at me like that. There\'s no reward for guessing right.'];
        } else {
          $this->giveItem(new Riddle());
          return ['I\'m trying to sleep here.',
          'If you\'re bored, you can try to solve this riddle.'];
        }
    }

    public function heal() : int {
      return 0;
    }

    public function healSpeak() : string|array {
        return [];
    }

    public function setLimitUse() : void {
      $this->limitUse -= 1;
  }


}