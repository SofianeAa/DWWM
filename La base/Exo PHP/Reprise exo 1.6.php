<?php
$a = 5;
$b = 2;
$c = $a;

$a = $c;
$a = $b;
$b = $c;

echo $a;
echo $b;
