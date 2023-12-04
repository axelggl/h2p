<?php

function getFloor($currentFloor, $requestedFloor, $calledFloors): ?int
{
    // If there is a requested floor, go directly to that floor
    if ($requestedFloor !== null) {
        return (int) $requestedFloor;
    }
    // print to terminal

    // If there are called floors, go to the nearest called floor
    if (!empty($calledFloors)) {
        $nearestFloor = getNearestNumberInArray($currentFloor, $calledFloors);

        return (int) $nearestFloor;
    }

    // If there are no requested or called floors, stay on the current floor
    return (int) $currentFloor;
}

function getDirection($currentFloor, $requestedFloor, $calledFloors): int
{
    if ($requestedFloor !== null) {
        // If there is a requested floor, determine the direction to reach it
        return ($requestedFloor > $currentFloor) ? 1 : (($requestedFloor < $currentFloor) ? -1 : 0);
    }

    if (!empty($calledFloors)) {
        // If there are called floors, determine the direction to reach the nearest called floor
        $nearestFloor = min($calledFloors, function ($floor) use ($currentFloor) {
            return abs($floor - $currentFloor);
        });

        return ($nearestFloor > $currentFloor) ? 1 : (($nearestFloor < $currentFloor) ? -1 : 0);
    }

    // If there are no requested or called floors, no movement is needed
    return 0;
}

// return an integer
// take as input an integer and an array of integers
// return the integer in the array that is closest to the input integer
function getNearestNumberInArray($numbers, $reference) {
    $nearest = null;
    $nearestDistance = null;

    foreach ($reference as $number) {
        $distance = abs($number - $numbers);

        if ($nearestDistance === null || $distance < $nearestDistance) {
            $nearest = $number;
            $nearestDistance = $distance;
        }
    }

    return $nearest;
}

// Example usage:
$currentFloor = 0;
$requestedFloor = null;
$calledFloors = [-12, 6];

$nextFloor = getFloor($currentFloor, $requestedFloor, $calledFloors);
$direction = getDirection($currentFloor, $requestedFloor, $calledFloors);

echo "Next floor: $nextFloor, Direction: $direction\n";