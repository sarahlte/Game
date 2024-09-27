<?php

namespace Rpg\Game\Maps;

use Jugid\Staurie\Component\Map\Blueprint;
use Jugid\Staurie\Game\Position\Position;
use Rpg\Game\Monsters\Goblin;

class Map04 extends Blueprint {
  private Position $position;

  public function __construct()
  {
      $this->position = new Position(1,0);
  }

  public function name(): string {
    return 'plain';
  }

  public function description(): string { 
    return '';
  }
  
  public function position(): Position {
    return $this->position;
  }

  public function npcs(): array {
    return [];
  }

  public function items(): array {
    return [];
  }

  public function monsters(): array {
    return [new Goblin()];
  }

}
