<?php

function reverse(array $arr): array {
    return array_reverse($arr);
}

function push(array &$arr, ...$elements): int {
    return array_push($arr, ...$elements);
}

function sum(array $arr): int {
    return array_sum($arr);
}

function arrayContains(array $arr, $value) {
    if (in_array($value, $arr)) {
        return $value;
    } else {
        return 'Nothing';
    }
}

function merge(array ...$arrays): array {
    return array_merge(...$arrays);
}
