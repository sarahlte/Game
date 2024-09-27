<?php

namespace Rpg\Game\Maps;

use Jugid\Staurie\Component\Map\Blueprint;
use Jugid\Staurie\Game\Position\Position;

class Map08 extends Blueprint {
  private Position $position;

  public function __construct()
  {
      $this->position = new Position(1,5);
  }

  public function name(): string {
    return 'Path to the north';
  }

  public function description(): string { 
    return 'A way filled with trees and mushrooms. Everything glows in a purple light.';
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
