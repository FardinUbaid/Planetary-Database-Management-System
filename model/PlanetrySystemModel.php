<?php
require_once 'dbcon.php'; 

function getAllPlanetrySystems() {

    $conn = getConnection();

    $query = "SELECT * FROM PlanetrySystem";
    $statement = oci_parse($conn, $query);
    oci_execute($statement);

    $systems = [];
    while ($row = oci_fetch_assoc($statement)) {
        $systems[] = $row;
    }

    oci_free_statement($statement);
    return $systems;
}

function getPlanetrySystemById($system_id) {

    $conn = getConnection();

    $query = "SELECT * FROM PlanetrySystem WHERE system_id = $system_id";
    $statement = oci_parse($conn, $query);
    oci_execute($statement);

    $system = oci_fetch_assoc($statement);
    oci_free_statement($statement);

    return $system;
}

function insertPlanetrySystem($system_id, $system_name, $galaxy_name) {

    $conn = getConnection();
    $query = "INSERT INTO PlanetrySystem (system_id, system_name, galaxy_name) 
              VALUES ($system_id, '$system_name', '$galaxy_name')";
    
    $statement = oci_parse($conn, $query);
    $result = oci_execute($statement);
    oci_free_statement($statement);

    return $result;
}

function updatePlanetrySystem($system_id, $system_name, $galaxy_name) {

    $conn = getConnection();

    $query = "UPDATE PlanetrySystem SET system_name='$system_name', galaxy_name='$galaxy_name' 
              WHERE system_id=$system_id";
    
    $statement = oci_parse($conn, $query);
    $result = oci_execute($statement);
    oci_free_statement($statement);

    return $result;
}

function deletePlanetrySystem($system_id) {

    $conn = getConnection();

    $query = "DELETE FROM PlanetrySystem WHERE system_id=$system_id";

    $statement = oci_parse($conn, $query);
    $result = oci_execute($statement);
    oci_free_statement($statement);
    
    return $result;
}
?>
