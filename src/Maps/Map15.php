<?php

namespace Rpg\Game\Maps;

use Jugid\Staurie\Component\Map\Blueprint;
use Jugid\Staurie\Game\Position\Position;

class Map15 extends Blueprint {
  private Position $position;

  public function __construct()
  {
      $this->position = new Position(3,5);
  }

  public function name(): string {
    return 'Somewhere';
  }

  public function description(): string { 
    return 'It\'s a dead end. The wind is super strong here.';
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
