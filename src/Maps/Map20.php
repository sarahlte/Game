<?php

namespace Rpg\Game\Maps;

use Jugid\Staurie\Component\Map\Blueprint;
use Jugid\Staurie\Game\Position\Position;
use Rpg\Game\Npcs\Crow;

class Map20 extends Blueprint {
  private Position $position;

  public function __construct()
  {
      $this->position = new Position(5,10);
  }

  public function name(): string {
    return 'test ...';
  }

  public function description(): string { 
    return 'A big tree stand in the middle of the clearing.';
  }
  
  public function position(): Position {
    return $this->position;
  }

  public function npcs(): array {
    return [new Crow()];
  }

  public function items(): array {
    return [];
  }

  public function monsters(): array {
    return [];
  }

}
