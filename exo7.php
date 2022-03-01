<?php
$age = 90;
echo preg_match_all('/^[1-9][0-9]?$|^100$/', $age);