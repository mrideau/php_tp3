<?php
$persons = ['John Doe', 'Matis Rido', 'Jimmy Gilbert'];

function cmp($a, $b)
{
    return strlen($a) < strlen($b) ? 1 : -1;
}

usort($persons, 'cmp');

for ($i=0; $i < count($persons); $i++)
{
    $person = $persons[$i];
    $names = explode(' ', $person);

    $firstname_len = strlen($names[0]);
    $lastname_len = strlen($names[1]);

    $len = $firstname_len + $lastname_len;

    if ($len > 20)
        continue;
    
    $space = 20 - $len;

    if ($i != 0)
        $space -= strlen(explode(' ', $persons[0])[1]) - $lastname_len - 1;
    
    echo $names[0] . str_repeat('_',  $space) . $names[1];
    echo '<br>';
}