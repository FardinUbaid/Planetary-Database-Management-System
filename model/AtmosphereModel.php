<?php
require_once 'dbcon.php'; 

function getAllAtmospheres() {

    $conn = getConnection();

    $query = "SELECT * FROM Atmosphere";
    $statement = oci_parse($conn, $query);
    oci_execute($statement);

    $atmospheres = [];
    while ($row = oci_fetch_assoc($statement)) {
        $atmospheres[] = $row;
    }

    oci_free_statement($statement);
    return $atmospheres;
}

function getAtmosphereById($atmosphere_id) {

    $conn = getConnection();

    $query = "SELECT * FROM Atmosphere WHERE atmosphere_id = $atmosphere_id";
    $statement = oci_parse($conn, $query);
    oci_execute($statement);

    $atmosphere = oci_fetch_assoc($statement);
    oci_free_statement($statement);

    return $atmosphere;
}

function insertAtmosphere($atmosphere_id, $planet_id, $gas_composition) {

    $conn = getConnection();

    $query = "INSERT INTO Atmosphere (atmosphere_id, planet_id, gas_composition) 
              VALUES ($atmosphere_id, $planet_id, '$gas_composition')";
    
    $statement = oci_parse($conn, $query);
    $result = oci_execute($statement);
    oci_free_statement($statement);

    return $result;
}

function updateAtmosphere($atmosphere_id, $planet_id, $gas_composition) {

    $conn = getConnection();

    $query = "UPDATE Atmosphere SET planet_id=$planet_id, gas_composition='$gas_composition' 
              WHERE atmosphere_id=$atmosphere_id";
    
    $statement = oci_parse($conn, $query);
    $result = oci_execute($statement);
    oci_free_statement($statement);

    return $result;
}

function deleteAtmosphere($atmosphere_id) {

    $conn = getConnection();

    $query = "DELETE FROM Atmosphere WHERE atmosphere_id=$atmosphere_id";
    
    $statement = oci_parse($conn, $query);
    $result = oci_execute($statement);
    oci_free_statement($statement);
    return $result;
}
?>
