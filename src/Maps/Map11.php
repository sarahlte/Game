<?php

namespace Rpg\Game\Maps;

use Jugid\Staurie\Component\Map\Blueprint;
use Jugid\Staurie\Game\Position\Position;

class Map11 extends Blueprint {
  private Position $position;

  public function __construct()
  {
      $this->position = new Position(0,5);
  }

  public function name(): string {
    return 'Waterfall';
  }

  public function description(): string { 
    return 'There\'s a waterfall here. A strange rock stands near the steam but you can\'t reach it.';
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
