<?php

namespace src\Maps;

use Jugid\Staurie\Component\Map\Blueprint;
use Jugid\Staurie\Game\Position\Position;
use src\npcs\Aries;
use src\monsters\Kobold;

class Map1 extends Blueprint {
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
    return [new Aries()];
  }

  public function items(): array {
    return [];
  }

  public function monsters(): array {
    return [new Kobold()];
  }

}
