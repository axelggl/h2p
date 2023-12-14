<?php
function factorial(int $arg)
{
    $factorial = 1;
    for ($i=1; $i < $arg; $i++){
        $factorial = $factorial * $i;
    }
    return $factorial;
}