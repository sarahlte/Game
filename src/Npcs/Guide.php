<?php

namespace Rpg\Game\Npcs;

use Rpg\Game\Items\Peeble;
use Rpg\Game\Items\Balloon;
use Jugid\Staurie\Game\Npc;

class Guide extends Npc {
    
    public function name() : string {
        return 'Guide';
    }

    public function description() : string {
        return 'A man with his face hidden.';
    }

    public function speak() : string|array {
        if ($this->playerHasItem('peeble')) {
          $this->giveItem(new Balloon());
          return ['Here for ya my friend'];
        } else {
          $this->giveItem(new Peeble());
          return ['Hi if you are lost, you can type help to see the different command in the game'];
        }
    }

}