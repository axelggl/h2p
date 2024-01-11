<?php
// Reverse the order of elements in an array
function reverse(array $arr): array {
    return array_reverse($arr);
}

// Stack one or more elements at the end of an array
function push(array &$arr, ...$elements): int {
    return array_push($arr, ...$elements);
}

// Calculate the sum of values in an array
function sum(array $arr): int {
    return array_sum($arr);
}

// Check if a value belongs to an array
function arrayContains(array $arr, $value) {
    if (in_array($value, $arr)) {
        return $value;
    } else {
        return 'Nothing';
    }
}

// Merge multiple arrays into one
function merge(array ...$arrays): array {
    return array_merge(...$arrays);
}
