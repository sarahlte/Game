<?php

namespace Jugid\Staurie\Component\Map;

use Jugid\Staurie\Container;
use Jugid\Staurie\Game\Item;
use Jugid\Staurie\Game\Npc;
use Jugid\Staurie\Game\Monster;
use Jugid\Staurie\Interface\Containerable;
use Jugid\Staurie\Interface\Describable;
use Jugid\Staurie\Interface\Initializable;
use Jugid\Staurie\Interface\Positionnable;
use Jugid\Staurie\Interface\Speakable;

abstract class Blueprint implements Containerable, Initializable, Describable, Positionnable {

    private Container $container;

    private array $npcs = [];

    private array $items = [];

    private array $monsters = [];

    final public function setContainer(Container $container): void
    {
        $this->container = $container;
    }

    final public function initialize() : void {
        $npcs = $this->npcs();
        $items = $this->items();
        $monsters = $this->monsters();

        foreach($npcs as $npc) {
            $npc->setContainer($this->container);
            $this->npcs[$npc->name()] = $npc;
        }

        foreach($items as $item) {
            $this->items[$item->name()] = $item;
        }

        foreach($monsters as $monster) {
            $monster->setContainer($this->container);
            $this->monsters[$monster->name()] = $monster;
        }
    }

    public function getNpc(string $npc_name) : ?Npc{
        if(!$this->hasNpc($npc_name)) {
            return null;
        }

        return $this->npcs[$npc_name];
    }

    public function getMonster(string $monster_name) : ?Monster{
        if(!$this->hasMonster($monster_name)) {
            return null;
        }

        return $this->monsters[$monster_name];
    }

    private function hasNpc(string $npc_name) : bool {
        return isset($this->npcs[$npc_name]);
    }

    private function hasMonster(string $monster_name) : bool {
        return isset($this->monsters[$monster_name]);
    }

    public function takeItem(string $item_name) : ?Item{
        if(!$this->hasItem($item_name)) {
            return null;
        }
        
        $item = $this->items[$item_name];
        unset($this->items[$item_name]);
        return $item;
    }

    public function dropItem(Item $item) {
        $this->items[$item->name()] = $item;
    }

    private function hasItem(string $item_name) : bool {
        return isset($this->items[$item_name]);
    }

    public function getNpcs() : ?array {
        return $this->npcs;
    }

    public function getItems() : ?array {
        return $this->items;
    }

    public function getMonsters() : ?array {
        foreach ($this->monsters as $monster) {
            if ($monster->health_points() <= 0){
                $name = $monster->name();
                unset($this->monsters[$name]);
            }
        }
        return $this->monsters;
    }

    abstract public function npcs() : array;
    abstract public function items() : array;
    abstract public function monsters() : array;

}