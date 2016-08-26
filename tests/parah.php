<?php
require __DIR__.'/../vendor/autoload.php';
use Algenza\Simpledump\Dumper;
$x = new \Algenza\Simpledump\Dumper;

$x->sd([1,2,3,4,5]);