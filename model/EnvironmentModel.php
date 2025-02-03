<?php
require_once 'dbcon.php'; 

function getAllEnvironmentConditions() {

    $conn = getConnection();

    $query = "SELECT * FROM EnvironmentCondition";
    $statement = oci_parse($conn, $query);
    oci_execute($statement);

    $conditions = [];
    while ($row = oci_fetch_assoc($statement)) {
        $conditions[] = $row;
    }

    oci_free_statement($statement);
    return $conditions;

}

function getEnvironmentConditionById($condition_id) {

    $conn = getConnection();

    $query = "SELECT * FROM EnvironmentCondition WHERE condition_id = $condition_id";
    $statement = oci_parse($conn, $query);
    oci_execute($statement);

    $condition = oci_fetch_assoc($statement);
    oci_free_statement($statement);

    return $condition;
}

function insertEnvironmentCondition($condition_id, $planet_id, $avg_temperature_c, $atmospheric_pressure_pa, $gravity_m_s2) {

    $conn = getConnection();

    $query = "INSERT INTO EnvironmentCondition (condition_id, planet_id, avg_temperature_c, atmospheric_pressure_pa, gravity_m_s2) 
              VALUES ($condition_id, $planet_id, $avg_temperature_c, $atmospheric_pressure_pa, $gravity_m_s2)";
    
    $statement = oci_parse($conn, $query);
    $result = oci_execute($statement);
    oci_free_statement($statement);

    return $result;
}

function updateEnvironmentCondition($condition_id, $planet_id, $avg_temperature_c, $atmospheric_pressure_pa, $gravity_m_s2) {

    $conn = getConnection();

    $query = "UPDATE EnvironmentCondition SET planet_id=$planet_id, avg_temperature_c=$avg_temperature_c, 
              atmospheric_pressure_pa=$atmospheric_pressure_pa, gravity_m_s2=$gravity_m_s2 WHERE condition_id=$condition_id";
    
    $statement = oci_parse($conn, $query);
    $result = oci_execute($statement);
    oci_free_statement($statement);

    return $result;
}

function deleteEnvironmentCondition($condition_id) {

    $conn = getConnection();

    $query = "DELETE FROM EnvironmentCondition WHERE condition_id=$condition_id";
    
    $statement = oci_parse($conn, $query);
    $result = oci_execute($statement);
    oci_free_statement($statement);

    return $result;
}
?>
