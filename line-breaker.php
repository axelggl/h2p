<?php
function breakLines(string $string, int $maxLength): string {
    $words = explode(' ', $string);
    $lines = [];
    $currentLine = '';

    foreach($words as $word) {
        if (strlen($currentLine) + strlen($word) + 1 < $maxLength) {
            $currentLine .= $word . ' ';
        } else {
            $lines[] = rtrim($currentLine);
            $currentLine = $word . ' ';
        }
    }

    $lines[] = rtrim($currentLine);
    return implode("\n", $lines);
}