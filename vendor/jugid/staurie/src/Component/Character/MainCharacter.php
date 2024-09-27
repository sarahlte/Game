<?php

namespace Jugid\Staurie\Component\Character;

use Jugid\Staurie\Component\AbstractComponent;
use Jugid\Staurie\Component\Character\CoreFunctions\EquipFunction;
use Jugid\Staurie\Component\Character\CoreFunctions\MainCharacterFunction;
use Jugid\Staurie\Component\Character\CoreFunctions\SpeakFunction;
use Jugid\Staurie\Component\Character\CoreFunctions\FightFunction;
use Jugid\Staurie\Component\Character\CoreFunctions\StatsFunction;
use Jugid\Staurie\Component\Character\CoreFunctions\UnequipFunction;
use Jugid\Staurie\Component\Inventory\Inventory;
use Jugid\Staurie\Component\Level\Level;
use Jugid\Staurie\Component\Map\Map;
use Jugid\Staurie\Component\PrettyPrinter\PrettyPrinter;
use Jugid\Staurie\Game\Item_Equippable;
use Jugid\Staurie\Game\Npc;
use Jugid\Staurie\Game\Monster;
use LogicException;

class MainCharacter extends AbstractComponent {

    public Statistics $statistics;

    public string $name;

    public string $gender;

    public array $equipment;

    final public function name() : string {
        return 'character';
    }

    final public function getEventName() : array {
        $events = ['character.me', 'character.new'];

        if($this->container->isComponentRegistered(Map::class)) {
            array_push($events, 'character.speak');
            array_push($events, 'character.fight');
        }

        if($this->container->isComponentRegistered(Inventory::class)) {
            array_push($events, 'character.equip');
            array_push($events, 'character.unequip');
        }

        if($this->container->isComponentRegistered(Level::class)) {
            array_push($events, 'character.stats');
        }

        return $events;
    }

    final public function require() : array {
        return [PrettyPrinter::class];
    }

    final public function initialize() : void {
        $console = $this->container->getConsole();
        $console->addFunction(new MainCharacterFunction());

        if($this->container->isComponentRegistered(Map::class)) {
            $console->addFunction(new SpeakFunction());
            $console->addFunction(new FightFunction());
        }

        if($this->container->isComponentRegistered(Inventory::class)) {
            $console->addFunction(new EquipFunction());
            $console->addFunction(new UnequipFunction());
        }

        if($this->container->isComponentRegistered(Level::class)) {
            $console->addFunction(new StatsFunction());
        }

        $this->statistics = $this->config['statistics'];
        $this->name = $this->config['name'];
        $this->gender = $this->config['gender'];
        $this->equipment = $this->config['equipment'];
    }

    final protected function action(string $event, array $arguments) : void {
        $pp = $this->container->getPrettyPrinter();

        switch($event) {
            case 'character.speak':
                $this->speak($arguments['to']);
                break;
            case 'character.fight':
                $this->fight($arguments['to']);
                break;
            case 'character.equip':
                $this->equip($arguments['item'], $arguments['body_part']);
                break;
            case 'character.unequip':
                $this->unequip($arguments['item'], $arguments['body_part']);
                break;
            case 'character.stats':
                $this->stats($arguments['type'], $arguments['stat']);
                break;
            default:
                $this->eventToAction($event);
                break;
        }
    }

    final protected function new() {
        $this->name = readline('Character name : ');
        $this->gender = readline('Character gender : ');

        $this->container->dispatcher()->dispatch('race.ask');
        $this->container->dispatcher()->dispatch('tribe.ask');

        $pp = $this->container->getPrettyPrinter();
        $pp->writeLn('Welcome ' . $this->name, 'green');
    }

    final protected function me() {
        $pp = $this->container->getPrettyPrinter();
        $pp->writeUnder('Details', 'green');
        $pp->writeLn('Name : ' . $this->name);
        $pp->writeLn('Gender : ' . $this->gender);

        $this->container->dispatcher()->dispatch('race.view');
        $this->container->dispatcher()->dispatch('tribe.view');
        $this->container->dispatcher()->dispatch('level.view');

        $pp->writeUnder("\nYour equipment", 'green');
        $header = ['Body part', 'Name', 'Statistics'];
        $line = [];
        foreach($this->equipment as $body_part => $equipment) {
            $stats = array_map(function(string $type, string $value) {
                return "$type : $value";
            }, array_keys($equipment?->statistics() ?? []), array_values($equipment?->statistics() ?? []));

            $line[] = [$body_part, $equipment?->name() ?? '---',implode(', ', $stats)];
        }
        $pp->writeTable($header, $line);

        $pp->writeUnder("\nYour statistics", 'green');
        $header = ['Attribute', 'Value'];
        $line = [];

        foreach($this->statistics->asArray() as $name=>$value) {
            $line[] = [ucfirst($name), $value];
        }
        $pp->writeTable($header, $line);
    }

    private function speak(string $npc_name) {
        $pp = $this->container->getPrettyPrinter();
        $npc = $this->container->getMap()->getCurrentBlueprint()->getNpc($npc_name);

        if(null !== $npc && $npc instanceof Npc) {
            $dialog = $npc->speak();
            $this->printNpcDialog($npc_name, $dialog);
        } else {
            $pp->writeLn('You are probably talking to a ghost', 'red');
        }
    }

    private function fight(string $monster_name) {
        $pp = $this->container->getPrettyPrinter();
        $monster = $this->container->getMap()->getCurrentBlueprint()->getMonster($monster_name);

        if(null !== $monster && $monster instanceof Monster) {
            //$dialog = $monster->speak();
            //$this->printNpcDialog($monster_name, $dialog);
            if ($monster->getAttack() - $this->statistics->value('defense') > 0){
                $damage = $monster->getAttack() - $this->statistics->value('defense');
            } else { 
                $damage = 0;
            }
            $pp->writeLn('You got '.$damage.' damage.', 'red');
            $this->statistics->add('health', -$damage);
            if($this->statistics->value('health') <= 0) {
                $pp->writeLn('You\'ve been killed !!', 'red');
                sleep(3);
                $this->container->state()->stop();
            } else {
                if ($this->statistics->value('attack') - $monster->getDefense() > 0){
                    $monster_damage = $this->statistics->value('attack') - $monster->getDefense();
                } else {
                    $monster_damage = 0;
                }
                $monster_life = $monster->getLife($monster_damage);
                $level = $this->container->getComponent('level');
                if ($monster->health_points() <= 0){
                    $pp->writeLn('You dealed '.$monster_damage.' damage to '.$monster->name().'. You killed them !', 'red');
                    $pp->writeLn('You gained '.$monster->experience().' exp !', 'green');
                    $level->experienceUp($monster->experience());
                } else {
                    $pp->writeLn('You dealed '.$monster_damage.' damage to '.$monster->name().'.', 'red');
                }
            }
        } else {
            $pp->writeLn('You are probably fighting a ghost', 'red');
        }
    }

    private function equip(string $item_name, string $body_part) {
        $pp = $this->container->getPrettyPrinter();
        $inventory = $this->container->getInventory();

        $item = $inventory->getItem($item_name);

        if($item === null) {
            $pp->writeLn('Item not found', null, 'red');
            return;
        }

        if(!in_array($body_part, array_keys($this->equipment))) {
            $format = 'Body part does not exist. Should be in %s';
            $pp->writeLn(sprintf($format, implode(',', array_keys($this->equipment))), null, 'red');
            return;
        }

        if(!$item instanceof Item_Equippable) {
            $pp->writeLn('This item is not equippable', null, 'red');
            return;
        }

        if($body_part !== $item->body_part()) {
            $pp->writeLn("This item cannot be on your $body_part", null, 'red');
            return;
        }

        $this->equipment[$body_part] = clone $item;

        foreach($item->statistics() as $type => $value) {
            $this->statistics->add($type, $value);
        }
        $inventory->removeItem($item_name);
        $pp->writeLn("Item $item_name is yours !");
    }

    private function unequip(string $item_name, string $body_part) {
        $pp = $this->container->getPrettyPrinter();
        $inventory = $this->container->getInventory();

        if(!in_array($body_part, array_keys($this->equipment))) {
            $format = 'Body part does not exist. Should be in %s';
            $pp->writeLn(sprintf($format, implode(',', array_keys($this->equipment))), null, 'red');
            return;
        }

        $item = $this->equipment[$body_part];

        if($item === null || $item->name() !== $item_name) {
            $pp->writeLn('Item not found', null, 'red');
            return;
        }

        $inventory->addItem(clone $item);

        foreach($item->statistics() as $type => $value) {
            $this->statistics->sub($type, $value);
        }

        $this->equipment[$body_part] = null;
        $pp->writeLn("This $item_name was not worthy !");
    }

    private function stats(string $type, string $stat) : void {
        $pp = $this->container->getPrettyPrinter();
        $level = $this->container->getComponent('level');

        if(!in_array($stat, array_keys($this->statistics->asArray()))) {
            $pp->writeLn("Stat $stat does not exist.", 'red');
        }

        switch($type) {
            case 'add' :
                if($level->points > 0) {
                    $this->statistics->add($stat, 1);
                    $level->points -= 1;
                    $pp->writeLn("One point added to $stat", 'green');
                    break;
                }
                $pp->writeLn("You don't have enough points", 'red');
                break;
            default:
                $pp->writeLn("You can only use function add", 'red');
        }
    }

    private function printNpcDialog(string $npc_name, string|array $dialog) : void {
        if(is_string($dialog)) {
            $this->printNpcSingleDial($npc_name, $dialog);
            return;
        }

        foreach($dialog as $dial) {
            $this->printNpcSingleDial($npc_name, $dial);
        }
    }

    private function printNpcSingleDial(string $npc_name, string $dial) : void {
        $pp = $this->container->getPrettyPrinter();
        $pp->write($npc_name . ' : ', 'green');
        $pp->writeScroll($dial, 20);
    }

    final public function defaultConfiguration() : array {
        return [
            'name'=>'Unknown',
            'gender'=>'Unknown',
            'statistics'=>Statistics::default(),
            'equipment' => [
                'head' => null,
                'hand' => null,
                'shield' => null,
                'feet' => null,
                'shoulders' => null,
            ]
        ];
    }

    final public function hasEnoughStats(string $stat_name, int $value) : bool {
        if(!$this->statistics->has($stat_name)) {
            throw new LogicException("Stat $stat_name does not exist");
        }

        return $this->statistics->value($stat_name) >= $value;
    }
}