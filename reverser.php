<?php
function reverse(string $string): string {
    return strrev($string);
}

function isPalindrome(string $string): bool {
    $reversed = strrev($string);
    return $string == $reversed; // same as if ($reversed == $string) {return true}else{return false}
}
