<?php

namespace Rpg\Game\Maps;

use Jugid\Staurie\Component\Map\Blueprint;
use Jugid\Staurie\Game\Position\Position;

class Map14 extends Blueprint {
  private Position $position;

  public function __construct()
  {
      $this->position = new Position(3,6);
  }

  public function name(): string {
    return 'Cliff';
  }

  public function description(): string { 
    return 'Don\'t stay too close to the ledge, just follow the path. You can see water at the bottom of the pit.';
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
