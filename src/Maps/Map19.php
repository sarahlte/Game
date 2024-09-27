<?php

namespace Rpg\Game\Maps;

use Jugid\Staurie\Component\Map\Blueprint;
use Jugid\Staurie\Game\Position\Position;

class Map19 extends Blueprint {
  private Position $position;

  public function __construct()
  {
      $this->position = new Position(5,6);
  }

  public function name(): string {
    return 'Forest ?';
  }

  public function description(): string { 
    return 'The trees seem to whisper to you. Can you hear them ?';
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
