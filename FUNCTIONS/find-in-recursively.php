<?php 
function findIn($keyValue, $array):string | bool {

    if (array_key_exists($keyValue, $array)) {
        return $array[$keyValue];
    }

    foreach ($array as $value) {
        if (is_array($value)) {
            $result = findIn($keyValue, $value);
            if ($result !== false) {
                return $result;
            }
        }
    }

    return false;
}