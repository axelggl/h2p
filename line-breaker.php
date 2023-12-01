<?php
function breakLines(string $string, int $maxLength): string {
    $words = explode(' ', $string);
    $lines = [];
    $currentLine = '';

    foreach($words as $word) {
        $potentialLine = $currentLine . $word . ' ';
        if (strlen($potentialLine) <= $maxLength) {
            $currentLine .= $potentialLine;
        } else {
            $lines[] = rtrim($currentLine);
            $currentLine = $word . ' ';
        }
    }

    $lines[] = rtrim($currentLine);
    return implode("\n", $lines);
}