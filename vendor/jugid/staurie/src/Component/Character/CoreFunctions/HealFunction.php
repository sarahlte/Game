<?php

namespace Jugid\Staurie\Component\Character\CoreFunctions;

use Jugid\Staurie\Component\Console\AbstractConsoleFunction;

class HealFunction extends AbstractConsoleFunction {

    public function action(array $args) : void {
        $this->getContainer()->dispatcher()->dispatch('character.heal', ['by'=>$args[0]]);
    }

    public function name() : string {
        return 'heal';
    }

    public function description() : string {
        return 'Healed by Npc';
    }

    public function getArgs() : int|array {
        return 1;
    }
}