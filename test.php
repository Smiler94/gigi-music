<?php
require './vendor/autoload.php';
use \Gigi\GigiMusic;

$gigi = new GigiMusic(1);
print_r($gigi->getFirst(2));