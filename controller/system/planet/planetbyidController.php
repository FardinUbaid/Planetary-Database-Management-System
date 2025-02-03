<?php

require_once ('../../../model/PlanetModel.php');

if (isset($_POST['system_id'])) {
    $system_id = $_POST['system_id'];

    $planets = getPlanetById($system_id);


    if (!empty($planets)) {
        session_start();
        $_SESSION['planets'] = $planets;
        header("Location: ../../../view/system/planet/planetbyid.php");
        exit();
    } else {
        session_start();
        $_SESSION['error'] = "This system do not have any planet.";
        header("Location: ../../../view/system/planet/planetbyid.php");
        exit();
    }
}
?>
