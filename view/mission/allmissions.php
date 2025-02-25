<?php
session_start();
if (!isset($_SESSION['auth_id'])) {
    header("Location: ../auth/login.php");
    exit();
}
?>

<?php 
require_once ('../../controller/mission/allmissionsController.php'); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Planet Details</title>
    <link rel="stylesheet" href="../../asset/mission/mission.css">
    <link rel="icon" href="../../media/icons/astronaut_helmet.ico" type="image/ico" sizes="16x16">
</head>
<body>
    <header>
        Mission Details
    </header>
    <nav>
        <a href="../dash/dashboard.php">Dashboard</a>
        <a href="../system/allsystems.php">Solar Systems</a>
        <a href="../system/planet/allplanets.php">Planets</a>
        <a href="../system/planet/moon/allmoons.php">Moons</a>
        <a href="../system/planet/environment/allenvironments.php">Environment</a>  
        <a href="http://localhost/Planetary-Database-Management-System/view/about.php">About</a>
        <a href="../../controller/auth/logoutController.php">Logout</a>
        
    </nav>
    <table>
        <tr>
            <th>MISSION NAME</th>
            <th>MISSION STATUS</th>
            <th>LAUNCH DATE</th>
            <th>FINDINGS</th>
        </tr>

    <?php foreach ($missions as $mission): ?>
        <tr>
            <td><?php echo $mission['MISSION_NAME']; ?></td> 
            <td><?php echo $mission['STATUS']; ?></td>
            <td><?php echo $mission['LAUNCH_DATE']; ?></td>
            <td><?php echo $mission['FINDINGS']; ?></td>
        </tr>
    <?php endforeach; ?>
    </table>
    <footer>
        <p>Follow me on <a href="https://github.com/FardinUbaid" target="_blank">GitHub</a></p>
        <p>Contact: fardikenway7560@gmail.com</p>
    </footer>
</body>
</html>
