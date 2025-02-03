<?php
require_once 'dbcon.php'; 

function getAllMoons() {

    $conn = getConnection();

    $query = "SELECT * FROM Moon";
    $statement = oci_parse($conn, $query);
    oci_execute($statement);

    $moons = [];
    while ($row = oci_fetch_assoc($statement)) {
        $moons[] = $row;
    }

    oci_free_statement($statement);
    return $moons;
}

function getMoonById($moon_id) {

    $conn = getConnection();

    $query = "SELECT * FROM Moon WHERE moon_id = $moon_id";
    $statement = oci_parse($conn, $query);
    oci_execute($statement);

    $moon = oci_fetch_assoc($statement);
    oci_free_statement($statement);

    return $moon;
}

function insertMoon($moon_id, $moon_name, $moon_mass, $moon_type, $moon_diameter_km, $planet_id) {

    $conn = getConnection();

    $query = "INSERT INTO Moon (moon_id, moon_name, moon_mass, moon_type, moon_diameter_km, planet_id) 
              VALUES ($moon_id, '$moon_name', $moon_mass, '$moon_type', $moon_diameter_km, $planet_id)";
    
    $statement = oci_parse($conn, $query);
    $result = oci_execute($statement);
    oci_free_statement($statement);

    return $result;
}

function updateMoon($moon_id, $moon_name, $moon_mass, $moon_type, $moon_diameter_km, $planet_id) {

    $conn = getConnection();

    $query = "UPDATE Moon SET moon_name='$moon_name', moon_mass=$moon_mass, moon_type='$moon_type', 
              moon_diameter_km=$moon_diameter_km, planet_id=$planet_id WHERE moon_id=$moon_id";
    
    $statement = oci_parse($conn, $query);
    $result = oci_execute($statement);
    oci_free_statement($statement);

    return $result;
}

function deleteMoon($moon_id) {

    $conn = getConnection();

    $query = "DELETE FROM Moon WHERE moon_id=$moon_id";
    $statement = oci_parse($conn, $query);
    $result = oci_execute($statement);
    oci_free_statement($statement);
    
    return $result;
}
?>
