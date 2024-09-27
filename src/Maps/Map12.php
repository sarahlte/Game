<?php

namespace Rpg\Game\Maps;

use Jugid\Staurie\Component\Map\Blueprint;
use Jugid\Staurie\Game\Position\Position;

class Map12 extends Blueprint {
  private Position $position;

  public function __construct()
  {
      $this->position = new Position(1,6);
  }

  public function name(): string {
    return 'Mushroom clearing';
  }

  public function description(): string { 
    return 'A field full of glowing mushrooms. Don\'t eat any !';
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
