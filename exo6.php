<?php
$sentences = ['pas de mot interdit', 'Zut, le mot interdit'];

foreach ($sentences as $sentence) {
    if(strpos(strtolower($sentence), 'zut') === false)
        echo $sentence;
}