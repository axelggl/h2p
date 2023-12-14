<?php
function factorial(int $arg): int | float
{
    $factorial = 1;
    for ($i=1; $i < $arg; $i++){
        $factorial = $factorial * $i;
    }
    return $factorial;
}