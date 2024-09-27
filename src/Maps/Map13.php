<?php

namespace Rpg\Game\Maps;

use Jugid\Staurie\Component\Map\Blueprint;
use Jugid\Staurie\Game\Position\Position;
use Rpg\Game\Monsters\Chompi;

class Map13 extends Blueprint {
  private Position $position;

  public function __construct()
  {
      $this->position = new Position(2,6);
  }

  public function name(): string {
    return 'Dark path';
  }

  public function description(): string { 
    return 'This path is really dark. You almost can\'t see anything.';
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
    return [new Chompi()];
  }

}
