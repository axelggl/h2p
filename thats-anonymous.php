<?php
$today = function () {
    $date = date('F j, Y');
    return "It is $date";
};
$isLeapYear = function ($year) {
    return date('L', mktime(0, 0, 0, 1, 1, $year)) === '1';
};
echo $today() . "\n";
echo $isLeapYear(2021) . "\n";

