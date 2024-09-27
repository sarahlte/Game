<?php

namespace Rpg\Game\Maps;

use Jugid\Staurie\Component\Map\Blueprint;
use Jugid\Staurie\Game\Position\Position;

class Map21 extends Blueprint {
  private Position $position;

  public function __construct()
  {
      $this->position = new Position(6,7);
  }

  public function name(): string {
    return 'Forest !';
  }

  public function description(): string { 
    return 'It\'s a forest !';
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
