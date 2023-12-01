<?php
function capsMe(string $input): string {
    return strtoupper($input);
}

function lowerMe(string $input): string {
    return strtolower($input);
}

function upperCaseFirst(string $input): string {
    return ucwords($input);
}

function lowerCaseFirst(string $input): string {
    return lcfirst($input);
}

function removeBlankSpace(string $input): string {
    return trim($input);
}