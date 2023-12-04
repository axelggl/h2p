<?php

function getFloor(int $currentFloor, ?int $requestedFloor, array $calledFloors): int {
    // If there is a requested floor, go to that floor
    if ($requestedFloor !== null) {
        return $requestedFloor;
    }

    // If there are called floors, go to the nearest called floor
    if (!empty($calledFloors)) {
        return findNearestFloor($currentFloor, $calledFloors);
    }

    // If there are no requests, stay on the current floor
    return $currentFloor;
}

function getDirection(int $currentFloor, ?int $requestedFloor, array $calledFloors): int {
    // If there is a requested floor, determine the direction
    if ($requestedFloor !== null) {
        return ($requestedFloor > $currentFloor) ? 1 : -1;
    }

    // If there are called floors, determine the direction based on the nearest called floor
    if (!empty($calledFloors)) {
        $nearestFloor = findNearestFloor($currentFloor, $calledFloors);
        return ($nearestFloor > $currentFloor) ? 1 : -1;
    }

    // If there are no requests, no movement is needed
    return 0;
}

function findNearestFloor(int $currentFloor, array $floors): int {
    $nearestFloor = $floors[0];

    foreach ($floors as $floor) {
        if (abs($floor - $currentFloor) < abs($nearestFloor - $currentFloor)) {
            $nearestFloor = $floor;
        }
    }

    return $nearestFloor;
}

// Example Usage:
$currentFloor = 5;
$requestedFloor = 8;
$calledFloors = [2, 7, 10];

$nextFloor = getFloor($currentFloor, $requestedFloor, $calledFloors);
$direction = getDirection($currentFloor, $requestedFloor, $calledFloors);

echo "Next Floor: $nextFloor\n";
echo "Direction: $direction\n";
