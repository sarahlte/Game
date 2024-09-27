<?php

namespace Rpg\Game\Maps;

use Jugid\Staurie\Component\Map\Blueprint;
use Jugid\Staurie\Game\Position\Position;

class Map09 extends Blueprint {
  private Position $position;

  public function __construct()
  {
      $this->position = new Position(0,4);
  }

  public function name(): string {
    return 'Path to the west.';
  }

  public function description(): string { 
    return 'A beautiful river runs there. The sound of it fills you with joy.';
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
