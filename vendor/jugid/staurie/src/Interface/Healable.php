<?php

namespace Jugid\Staurie\Interface;

interface Healable {
    public function heal() : int;

    public function healSpeak() : string|array;
    public function getLimitUse() : int;

    public function setLimitUse() : void;

}