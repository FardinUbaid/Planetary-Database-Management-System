<?php
require_once 'dbcon.php'; 

function getAllMissions() {

    $conn = getConnection();

    $query = "SELECT * FROM Mission";
    $statement = oci_parse($conn, $query);
    oci_execute($statement);

    $missions = [];
    while ($row = oci_fetch_assoc($statement)) {
        $missions[] = $row;
    }

    oci_free_statement($statement);
    return $missions;
}

function getMissionById($mission_id) {

    $conn = getConnection();

    $query = "SELECT * FROM Mission WHERE mission_id = $mission_id";
    $statement = oci_parse($conn, $query);
    oci_execute($statement);

    $mission = oci_fetch_assoc($statement);
    oci_free_statement($statement);

    return $mission;
}

function insertMission($mission_id, $mission_name, $launch_date, $mission_status, $target_planet_id) {

    $conn = getConnection();

    $query = "INSERT INTO Mission (mission_id, mission_name, launch_date, mission_status, target_planet_id) 
              VALUES ($mission_id, '$mission_name', TO_DATE('$launch_date', 'YYYY-MM-DD'), '$mission_status', $target_planet_id)";
    
    $statement = oci_parse($conn, $query);
    $result = oci_execute($statement);
    oci_free_statement($statement);

    return $result;
}

function updateMission($mission_id, $mission_name, $launch_date, $mission_status, $target_planet_id) {

    $conn = getConnection();

    $query = "UPDATE Mission SET mission_name='$mission_name', launch_date=TO_DATE('$launch_date', 'YYYY-MM-DD'), 
              mission_status='$mission_status', target_planet_id=$target_planet_id WHERE mission_id=$mission_id";
    
    $statement = oci_parse($conn, $query);
    $result = oci_execute($statement);
    oci_free_statement($statement);

    return $result;
}

function deleteMission($mission_id) {

    $conn = getConnection();

    $query = "DELETE FROM Mission WHERE mission_id=$mission_id";

    $statement = oci_parse($conn, $query);
    $result = oci_execute($statement);
    oci_free_statement($statement);
    
    return $result;
}
?>
