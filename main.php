<?php

use Jugid\Staurie\Component\Console\Console;
use Jugid\Staurie\Component\Menu\Menu;
use Jugid\Staurie\Component\PrettyPrinter\PrettyPrinter;
use Mon\Name\Space;

require_once __DIR__.'/vendor/autoload.php'; //A REMPLACER

$staurie = new Staurie('My game');
$staurie->register([Console::class, PrettyPrinter::class, Menu::class]);

$staurie->run(); //LANCE LE JEU

$container = $staurie->getContainer();

$menu = $container->registerComponent(Menu::class);
$menu->configuration([
  'text'=> 'Welcome to this awesome test adventure',
  'labels'=> [
  'new_game' => 'Enter the world',
  'quit'=> 'Exit game',
]
]);