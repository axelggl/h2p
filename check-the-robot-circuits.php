<?php
function checkCircuits(int $int): array {
        $finalArray = [];
        $tab = [
            2 => 'Left Arm',
            3 => 'Right Arm',
            5 => 'Motherboard',
            7 => 'Processor',
            11 => 'Zip Defluxer',
            13 => 'Motor'
        ];

        foreach ($tab as $key => $value) {
            if (($int % intval($key)) == 0) {
                array_push($finalArray, $value);
            }
        }
    return $finalArray;
}