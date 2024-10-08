<?php

namespace Rpg\Game\Maps;

use Jugid\Staurie\Component\Map\Blueprint;
use Jugid\Staurie\Game\Position\Position;
use Rpg\Game\Npcs\Guide;

class Map01 extends Blueprint {
  private Position $position;

  public function __construct()
  {
      $this->position = new Position(0,0);
  }

  public function name(): string {
    return 'Enchanted forest';
  }

  public function description(): string { 
    return '';
  }
  
  public function position(): Position {
    return $this->position;
  }

  public function npcs(): array {
    return [new Guide()];
  }

  public function items(): array {
    return [];
  }

  public function monsters(): array {
    return [];
  }

}
