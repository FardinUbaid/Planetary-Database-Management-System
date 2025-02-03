<?php
require_once 'dbcon.php'; 


function getAllPlanets() {

    $conn = getConnection();

    $query = "SELECT * FROM Planet";
    $statement = oci_parse($conn, $query);
    oci_execute($statement);

    $planets = [];
    while ($row = oci_fetch_assoc($statement)) {
        $planets[] = $row;
    }

    oci_free_statement($statement);
    return $planets;
}


function getPlanetById($system_id) {
    $conn = getConnection();

    $query = "SELECT * FROM Planet WHERE SYSTEM_ID = $system_id";
    $statement = oci_parse($conn, $query);
    oci_execute($statement);

    $planets = []; 
    while ($row = oci_fetch_assoc($statement)) {
        $planets[] = $row;
    }

    oci_free_statement($statement);
    return $planets; 
}


function insertPlanet($planet_id, $planet_name, $planet_mass, $planet_type, $planet_diameter_km, $planet_distance_from_sun_au, $has_surface, $system_id) {

    $conn = getConnection();

    $query = "INSERT INTO Planet (planet_id, planet_name, planet_mass, planet_type, planet_diamenter_km, planet_distance_from_sun_au, has_surface, system_id) 
              VALUES ($planet_id, '$planet_name', $planet_mass, '$planet_type', $planet_diameter_km, $planet_distance_from_sun_au, '$has_surface', $system_id)";
    
    $statement = oci_parse($conn, $query);
    $result = oci_execute($statement);
    oci_free_statement($statement);

    return $result;
}


function updatePlanet($planet_id, $planet_name, $planet_mass, $planet_type, $planet_diameter_km, $planet_distance_from_sun_au, $has_surface, $system_id) {

    $conn = getConnection();

    $query = "UPDATE Planet 
              SET planet_name='$planet_name', planet_mass=$planet_mass, planet_type='$planet_type', planet_diamenter_km=$planet_diameter_km, 
                  planet_distance_from_sun_au=$planet_distance_from_sun_au, has_surface='$has_surface', system_id=$system_id
              WHERE planet_id=$planet_id";
    
    $statement = oci_parse($conn, $query);
    $result = oci_execute($statement);
    oci_free_statement($statement);

    return $result;
}


function deletePlanet($planet_id) {

    $conn = getConnection();

    $query = "DELETE FROM Planet WHERE planet_id=$planet_id";
    $statement = oci_parse($conn, $query);
    $result = oci_execute($statement);
    oci_free_statement($statement);
    
    return $result;
}
?>