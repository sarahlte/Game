<?php

namespace Jugid\Staurie\Component\Level;

use Jugid\Staurie\Component\AbstractComponent;
use Jugid\Staurie\Component\Character\MainCharacter;
use Jugid\Staurie\Component\PrettyPrinter\PrettyPrinter;

class Level extends AbstractComponent {

    public $level;

    public $experience;

    public $points;

    public function name() : string {
        return 'level';
    }

    final public function require() : array {
        return [PrettyPrinter::class, MainCharacter::class];
    }

    public function initialize(): void
    {
        $this->level = 1;
        $this->experience = 0;
        $this->points = $this->config['start_points'];
    }

    public function getEventName() : array {
        return ['level.up', 'level.view'];
    }

    protected function action(string $event, array $arguments) : void {
        $this->eventToAction($event);
    }

    final protected function up() {
        $pp = $this->container->getPrettyPrinter();
        while ($this->level < $this->config['max_level'] && $this->experience >= $this->getExperienceForCurrentLevel()) {
            $this->level++;
            $this->points += $this->config['point_per_level'];
            $this->experience -= $this->getExperienceForCurrentLevel();
            $pp->writeLn(sprintf('Level up! You are now level %d. You have %d points to use for your stats.', $this->level, $this->points));
        }
    }
    

    

    final protected function view() {
        $pp = $this->container->getPrettyPrinter();
        $pp->writeLn('Level : ' . $this->level . '/' . $this->config['max_level']);
        $pp->write('Points : ');
        $pp->writeln($this->points, $this->points > 0 ? 'green': null);
        $pp->writeProgressbar($this->experience, 0, $this->getExperienceForCurrentLevel());
    }

    public function experienceUp($exp): void {
        $this->experience += $exp;
        if ($this->experience >= $this->getExperienceForCurrentLevel()) {
            $this->up();
        }
    }


    private function getExperienceForCurrentLevel() : int {
        $formula = preg_replace('/\{level\}/', $this->level, $this->config['formula']);
        return eval('return '.$formula.';');
    }

    public function verifiy() {
        if($this->experience >= $this->getExperienceForCurrentLevel()) {
            $this->up();
        }
    }

    public function defaultConfiguration(): array
    {
        return [
            'formula' => '{level}*{level}+110',
            'max_level' => 100,
            'start_points' => 3,
            'point_per_level' => 5
        ];
    }
}