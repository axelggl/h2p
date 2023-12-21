<?php
function joinWords($wordArray, $separator = " "): string {
    $res = "";
    foreach ($wordArray as $key => $value) {
        $res .= $value;
        if ($key < count($wordArray) - 1) {
            $res .= $separator;
        }
    }
    return $res;
}