<?php
class Geolocation {

    const EARTH_RADIUS = 6371;

    public static function fromGeoPoints($lat1, $lon1, $lat2, $lon2) {
        
        $dLat = deg2rad($lat2 - $lat1);
        $dLon = deg2rad($lon2 - $lon1);

        $a = sin($dLat / 2) * sin($dLat / 2) + cos(deg2rad($lat1)) * cos(deg2rad($lat2)) * sin($dLon / 2) * sin($dLon / 2);
        $c = 2 * atan2(sqrt($a), sqrt(1 - $a));

        $distance = self::EARTH_RADIUS * $c;
        $roundedDistance = round($distance, 1);
        
        return $roundedDistance;
    }
}