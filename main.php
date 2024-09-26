<?php

use Jugid\Staurie\Component\Console\Console;
use Jugid\Staurie\Component\Menu\Menu;
use Jugid\Staurie\Component\Introduction\Introduction;
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

echo chr(27).chr(91).'H'.chr(27).chr(91).'J'; 

$introduction = $container->registerComponent(Introduction::class);
$introduction->configuration([
    'text'=>[
        'You wake up in an enchanted forest, all alone.',
        'You decide to take a look around to know where you are.'
    ],
    'title'=>'Chapter 1 : The enchanted forest.',
    'scrolling'=>false
]);

$staurie->run(); //LANCE LE JEU