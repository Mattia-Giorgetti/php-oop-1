<?php
include_once __DIR__ . '/Models/Movies.php';

$Taken = new Movie('taken.jpeg', 'Taken', '1h 33m', 2008, new Genre('Azione', 'Thriller'));
$GliAristogatti = new Movie('aristogatti.jpeg', 'Gli Aristogatti', '1h 18m', 1970, new Genre('Per Famiglie', 'Avventura'));
$TheBatman = new Movie('thebatman.jpeg', 'The Batman', '2h 56m', 2022, new Genre('Azione', 'Avventura'));
$Titanic = new Movie('titanic.jpeg', 'Titanic', '3h 14m', 1997, new Genre('Romantico', 'Drammatico'));
$TheMenu = new Movie('menu.jpeg', 'The Menu', '1h 47m', 2022, new Genre('Horror', 'Thriller'));
$Thor = new Movie('thor.jpeg', 'Thor: Ragnarok', '2h 10m', 2017, new Genre('Azione', 'Sci-fi'));

$Movies = [
    $Taken,
    $GliAristogatti,
    $TheBatman,
    $Titanic,
    $TheMenu,
    $Thor
];