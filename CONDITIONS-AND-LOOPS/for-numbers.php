<?php
for ($num = 2; $num < 100; $num++) {
    $isPrime = true;
    for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i == 0) {
            $isPrime = false;
            break;
        }
    }
    if ($isPrime) {
        echo $num; if ($num < 97) { echo ", "; }
    }
}