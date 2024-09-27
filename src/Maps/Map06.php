<?php

namespace Rpg\Game\Maps;

use Jugid\Staurie\Component\Map\Blueprint;
use Jugid\Staurie\Game\Position\Position;
use Rpg\Game\Monsters\Goblin;

class Map06 extends Blueprint {
  private Position $position;

  public function __construct()
  {
      $this->position = new Position(1,3);
  }

  public function name(): string {
    return 'path';
  }

  public function description(): string { 
    return 'Continuation of the previous path.';
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
