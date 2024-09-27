<?php

namespace Jugid\Staurie\Interface;

interface Fightable {
    public function getLife($damage) : int;
    public function getAttack() : int;
    public function getDefense() : int;

}