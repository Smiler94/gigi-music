<?php
require './vendor/autoload.php';
use \Gigi\GigiMusic;

$gigi = new GigiMusic(GigiMusic::GigiMusicType_Random);
print_r($gigi->getFirst(1));