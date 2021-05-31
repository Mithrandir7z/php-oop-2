<?php 

//All require once
require_once __DIR__ . '/sony.php';
require_once __DIR__ . '/microsoft.php';
require_once __DIR__ . '/nintendo.php';
require_once __DIR__ . '/user.php';



$playstation_4 = new Sony('Playstation 4', 'Sony');
$playstation_4->scheda_video = 'AMD';
var_dump($playstation_4->getInfoData());


$xbox_one = new Microsoft('Xbox One', 'Microsoft');
$xbox_one->scheda_video = 'nVidia';
var_dump($xbox_one->getInfoData());


$nintendo_switch = new Nintendo('Nintendo Switch', 'Nintendo');
$nintendo_switch->scheda_video = 'AMD';
var_dump($nintendo_switch->getInfoData());


$user = new User('Mario', 'Rossi');
var_dump($user);

?>