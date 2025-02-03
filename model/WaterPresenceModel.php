<?php
require_once 'dbcon.php'; 

function getAllWaterPresence() {

    $conn = getConnection();

    $query = "SELECT * FROM WaterPresence";
    $statement = oci_parse($conn, $query);
    oci_execute($statement);

    $waterData = [];
    while ($row = oci_fetch_assoc($statement)) {
        $waterData[] = $row;
    }

    oci_free_statement($statement);
    return $waterData;
}

function getWaterPresenceById($water_id) {

    $conn = getConnection();

    $query = "SELECT * FROM WaterPresence WHERE water_id = $water_id";
    $statement = oci_parse($conn, $query);
    oci_execute($statement);

    $water = oci_fetch_assoc($statement);
    oci_free_statement($statement);

    return $water;
}

function insertWaterPresence($water_id, $planet_id, $surface_water_percentage, $subsurface_water_presence) {

    $conn = getConnection();

    $query = "INSERT INTO WaterPresence (water_id, planet_id, surface_water_percentage, subsurface_water_presence) 
              VALUES ($water_id, $planet_id, $surface_water_percentage, '$subsurface_water_presence')";
    
    $statement = oci_parse($conn, $query);
    $result = oci_execute($statement);
    oci_free_statement($statement);

    return $result;
}

function updateWaterPresence($water_id, $planet_id, $surface_water_percentage, $subsurface_water_presence) {

    $conn = getConnection();

    $query = "UPDATE WaterPresence SET planet_id=$planet_id, surface_water_percentage=$surface_water_percentage, 
              subsurface_water_presence='$subsurface_water_presence' WHERE water_id=$water_id";
    
    $statement = oci_parse($conn, $query);
    $result = oci_execute($statement);
    oci_free_statement($statement);

    return $result;
}

function deleteWaterPresence($water_id) {

    $conn = getConnection();

    $query = "DELETE FROM WaterPresence WHERE water_id=$water_id";
    
    $statement = oci_parse($conn, $query);
    $result = oci_execute($statement);
    oci_free_statement($statement);

    return $result;
}
?>
