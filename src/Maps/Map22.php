<?php

namespace Rpg\Game\Maps;

use Jugid\Staurie\Component\Map\Blueprint;
use Jugid\Staurie\Game\Position\Position;
use Rpg\Game\Monsters\IronSlime;

class Map22 extends Blueprint {
  private Position $position;

  public function __construct()
  {
      $this->position = new Position(5,5);
  }

  public function name(): string {
    return 'Forest\'s river';
  }

  public function description(): string { 
    return 'The river\'s noise is bothering you a bit here.';
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
    return [new IronSlime()];
  }

}
