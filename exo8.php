<?php
$sentence = 'PHP 5 \n est meilleur \n que ASP \n et JSP \n réunis';

echo str_replace('\n', '<br/>', $sentence);

echo '<br/>';
echo '<br/>';

echo preg_replace('/\\\\n/', '<br/>', $sentence);