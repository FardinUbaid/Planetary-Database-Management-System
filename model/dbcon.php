<?php
function getConnection() {
    static $conn;

    if (!$conn) {
        $username = 'pldbms';
        $password = 'fkpr';
        $sid = 'XE'; 
        $host = 'localhost';

        $conn = oci_connect($username, $password, "$host/$sid");

        if (!$conn) {
            $error = oci_error();
            die("Connection failed: " . $error['message']);
        }
    }
    return $conn;
}
?>
