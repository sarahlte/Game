<?php

namespace Rpg\Game\Maps;

use Jugid\Staurie\Component\Map\Blueprint;
use Jugid\Staurie\Game\Position\Position;
use Rpg\Game\Monsters\Goblin;

class Map07 extends Blueprint {
  private Position $position;

  public function __construct()
  {
      $this->position = new Position(1,4);
  }

  public function name(): string {
    return 'Suspicious clearing';
  }

  public function description(): string { 
    return 'A suspiciously big area in the middle of the woods.';
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
    return [new Batman()];
  }

}
