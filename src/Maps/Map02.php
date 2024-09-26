<?php

namespace Rpg\Game\Maps;

use Jugid\Staurie\Component\Map\Blueprint;
use Jugid\Staurie\Game\Position\Position;
use Rpg\Game\Items\Sword;


class Map02 extends Blueprint {
  private Position $position;

  public function __construct()
  {
      $this->position = new Position(0,1);
  }

  public function name(): string {
    return 'Meadow';
  }

  public function description(): string { 
    return '';
  }
  
  public function position(): Position {
    return $this->position;
  }

  public function npcs(): array {
    return [];
  }

  public function items(): array {
    return [new Sword()];
  }

  public function monsters(): array {
    return [];
  }

}
