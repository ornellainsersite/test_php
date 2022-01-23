<?php

// Gestion des messages d'erreurs php
function debug($var, $mode = 1)
{
    $trace = debug_backtrace();
    $trace = array_shift($trace); echo "<strong> debug demandé dans le fichier : $trace[file] en ligne : $trace[line]</strong>";

    if($mode == 1){echo '<pre>'; print_r($var); echo '</pre>';}
    else{echo '<pre>'; var_dump($var); echo '</pre>';}
}


?>