<?php

namespace Rpg\Game\Maps;

use Jugid\Staurie\Component\Map\Blueprint;
use Jugid\Staurie\Game\Position\Position;

class Map18 extends Blueprint {
  private Position $position;

  public function __construct()
  {
      $this->position = new Position(5,7);
  }

  public function name(): string {
    return 'Crossroads';
  }

  public function description(): string { 
    return 'A big sign is trying to indicate where to go. It shows : 🡩 forest, 🡫 forest, 🡪 forest.';
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
    return [];
  }

}
