<?php
$sentence = 'PHP 5';

for ($i=0; $i < strlen($sentence); $i++)
{ 
    echo substr($sentence, $i, 1) . '<br>';
}