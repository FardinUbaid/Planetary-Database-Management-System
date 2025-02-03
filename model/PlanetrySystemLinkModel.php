<?php
require_once 'dbcon.php'; 

function getAllPlanetrySystemLinks() {

    $conn = getConnection();

    $query = "SELECT * FROM PlanetrySystemLink";
    $statement = oci_parse($conn, $query);
    oci_execute($statement);

    $links = [];
    while ($row = oci_fetch_assoc($statement)) {
        $links[] = $row;
    }

    oci_free_statement($statement);
    return $links;
}

function getPlanetrySystemLinkById($link_id) {

    $conn = getConnection();

    $query = "SELECT * FROM PlanetrySystemLink WHERE link_id = $link_id";
    $statement = oci_parse($conn, $query);
    oci_execute($statement);

    $link = oci_fetch_assoc($statement);
    oci_free_statement($statement);

    return $link;
}

function insertPlanetrySystemLink($link_id, $system_id, $linked_system_id) {

    $conn = getConnection();

    $query = "INSERT INTO PlanetrySystemLink (link_id, system_id, linked_system_id) 
              VALUES ($link_id, $system_id, $linked_system_id)";
    
    $statement = oci_parse($conn, $query);
    $result = oci_execute($statement);
    oci_free_statement($statement);

    return $result;
}

function updatePlanetrySystemLink($link_id, $system_id, $linked_system_id) {

    $conn = getConnection();

    $query = "UPDATE PlanetrySystemLink SET system_id=$system_id, linked_system_id=$linked_system_id 
              WHERE link_id=$link_id";
    
    $statement = oci_parse($conn, $query);
    $result = oci_execute($statement);
    oci_free_statement($statement);

    return $result;
}

function deletePlanetrySystemLink($link_id) {

    $conn = getConnection();

    $query = "DELETE FROM PlanetrySystemLink WHERE link_id=$link_id";
    $statement = oci_parse($conn, $query);
    $result = oci_execute($statement);
    oci_free_statement($statement);
    
    return $result;
}
?>
