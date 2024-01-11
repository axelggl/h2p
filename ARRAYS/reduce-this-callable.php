<?php

function myArrayReduce(array $array, callable $callback, $initial = null) {
    $accumulator = $initial;

    foreach ($array as $value) {
        $accumulator = $callback($accumulator, $value);
    }

    return $accumulator;
    echo $accumulator;
}
