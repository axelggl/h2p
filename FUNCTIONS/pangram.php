<?php
function isPangram($sentence): bool {
    $sentencelowered = strtolower($sentence);
    $alphabet = range('a', 'z');
    $letterPresence = array_fill_keys($alphabet, false);

    for ($i = 0; $i < strlen($sentencelowered); $i++) {
        $character = $sentencelowered[$i];
        if (ctype_alpha($character)) {
            $letterPresence[$character] = true;
        }
    } 
    return !in_array(false, $letterPresence, true);
}