<?php

namespace Rpg\Game\Maps;

use Jugid\Staurie\Component\Map\Blueprint;
use Jugid\Staurie\Game\Position\Position;

class Map10 extends Blueprint {
  private Position $position;

  public function __construct()
  {
      $this->position = new Position(2,4);
  }

  public function name(): string {
    return 'Path to the east';
  }

  public function description(): string { 
    return 'There\'s a gigantic lake here. You can\'t go any further from here for now.';
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
