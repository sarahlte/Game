<?php

use Jugid\Staurie\Component\Console\Console;
use Jugid\Staurie\Component\Menu\Menu;
use Jugid\Staurie\Component\PrettyPrinter\PrettyPrinter;
use Jugid\Staurie\Staurie;

require_once __DIR__.'/vendor/autoload.php'; //A REMPLACER

$staurie = new Staurie('Zodiac adventures');
$staurie->register([Console::class, PrettyPrinter::class, Menu::class]);

$container = $staurie->getContainer();

$menu = $container->registerComponent(Menu::class);
$menu->configuration([
  'text'=> 'You wake up in an enchanted forest, all alone... Find out who you are.',
  'labels'=> [
  'new_game' => 'Enter the world',
  'quit'=> 'Exit game',
]
]);

$staurie->run(); //LANCE LE JEU