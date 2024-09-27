<?php

namespace Rpg\Game\Maps;

use Jugid\Staurie\Component\Map\Blueprint;
use Jugid\Staurie\Game\Position\Position;

class Map17 extends Blueprint {
  private Position $position;

  public function __construct()
  {
      $this->position = new Position(4,7);
  }

  public function name(): string {
    return 'Bridge';
  }

  public function description(): string { 
    return 'An old bridge made of stone. You feel uneasy to cross there.';
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
