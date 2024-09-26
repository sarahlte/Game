<?php

namespace Rpg\Game\Maps;

use Jugid\Staurie\Component\Map\Blueprint;
use Jugid\Staurie\Game\Position\Position;
use Rpg\Game\Items\Sword;


class Map02 extends Blueprint {
  private Position $position;

  public function __construct()
  {
      $this->position = new Position(1,1);
  }

  public function name(): string {
    return 'Heart of the forest';
  }

  public function description(): string { 
    return '';
  }
  
  public function position(): Position {
    return $this->position;
  }

  public function npcs(): array {
    return [new Aries()];
  }

  public function items(): array {
    return [];
  }

  public function monsters(): array {
    return [];
  }

}
