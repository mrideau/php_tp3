<?php
$a = 'awdfgbg';
$b = 'hytjfnbc';

$c = array_merge(str_split($a), str_split($b));
sort($c);

print_r($c);