<?php
function manageMovements(string $str): array {
    $res = [];
    $tab = [
        'R' => 'RIGHT',
        'L' => 'LEFT',
        'F' => 'FRONT',
        'B' => 'BACKWARDS'
    ];
    $word = '';
    $last = '';

    for ($i = 0; $i < strlen($str); $i++) {
        if ($str[$i] == $last) {
            $word = $tab[$str[$i]] . 'AGAIN';
            array_push($res, $word);
        } else {
            array_push($res, $tab[$str[$i]]);
        }
        $last = $str[$i];
    }
    return $res;
}