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
    $words = explode(' ', $input);
    $lowercasedWords = array_map('strtolower', $words);
    $lowercasedWords[0] = ucfirst($lowercasedWords[0]);
    return implode(' ', $lowercasedWords);
}

function removeBlankSpace(string $input): string {
    return trim($input);
}