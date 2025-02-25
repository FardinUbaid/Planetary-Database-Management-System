<?php
session_start();
if (!isset($_SESSION['auth_id'])) {
    header("Location: ../../auth/login.php");
    exit();
}
?>
<?php
require_once ('../../../controller/system/planet/allplanetsController.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Planet List</title>
    <link rel="stylesheet" href="../../../asset/system/planet/planet.css">
    <link rel="icon" href="../../../media/icons/saturn.ico" type="image/ico" sizes="16x16">
</head>
<body>
    <header>
        PLANETS
    </header>
    <nav>
        <a href="../../dash/dashboard.php">Dashboard</a>
        <a href="../allsystems.php">Solar Systems</a>
        <a href="environment/allenvironments.php">Environment</a>
        <a href="moon/allmoons.php">Moons</a>
        <a href="../../mission/allmissions.php">Missions</a>
        <a href="http://localhost/Planetary-Database-Management-System/view/about.php">About</a>
        <a href="../../../controller/auth/logoutController.php">Logout</a>
        
    </nav>

<table>
    <thead>
        <tr>
            <th>Name</th>
            <th>Mass (10^24 kg)</th>
            <th>Type</th>
            <th>Diameter (km)</th>
            <th>Distance from Sun (AU)</th>
            <th>Has Surface</th>
            <th>Moons</th> 
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($planets as $planet) {
            echo "<tr>";
            echo "<td>{$planet['PLANET_NAME']}</td>";
            echo "<td>{$planet['PLANET_MASS']}</td>";
            echo "<td>{$planet['PLANET_TYPE']}</td>";
            echo "<td>{$planet['PLANET_DIAMENTER_KM']}</td>";
            echo "<td>{$planet['PLANET_DISTANCE_FROM_SUN_AU']}</td>";
            echo "<td>" . ($planet['HAS_SURFACE'] === 'Y' ? 'Yes' : 'No') . "</td>";

            
            if (isset($groupedMoons[$planet['PLANET_ID']])) {
                $moonsList = implode(", ", array_column($groupedMoons[$planet['PLANET_ID']], 'MOON_NAME'));
                echo "<td>{$moonsList}</td>";
            } else {
                echo "<td>No moons</td>"; 
            }

            echo "</tr>";
        }
        ?>
    </tbody>
</table>
    <footer>
        <p>Follow me on <a href="https://github.com/FardinUbaid" target="_blank">GitHub</a></p>
        <p>Contact: fardikenway7560@gmail.com</p>
    </footer>
</body>
</html>