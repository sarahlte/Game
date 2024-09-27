<?php

namespace Rpg\Game\Maps;

use Jugid\Staurie\Component\Map\Blueprint;
use Jugid\Staurie\Game\Position\Position;

class Map16 extends Blueprint {
  private Position $position;

  public function __construct()
  {
      $this->position = new Position(3,7);
  }

  public function name(): string {
    return 'Cave entrance';
  }

  public function description(): string { 
    return 'The atmosphere here is really strange. Do you want to enter the cave ?';
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
