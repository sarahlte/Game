<?php

namespace Jugid\Staurie\Component\Character\CoreFunctions;

use Jugid\Staurie\Component\Console\AbstractConsoleFunction;

class FightFunction extends AbstractConsoleFunction {

    public function action(array $args) : void {
        $this->getContainer()->dispatcher()->dispatch('character.fight', ['to'=>$args[0]]);
    }

    public function name() : string {
        return 'fight';
    }

    public function description() : string {
        return 'Fight a monster';
    }

    public function getArgs() : int|array {
        return 1;
    }
}