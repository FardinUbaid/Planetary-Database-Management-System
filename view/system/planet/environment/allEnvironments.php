<?php
session_start();
if (!isset($_SESSION['auth_id'])) {
    header("Location: ../../../auth/login.php");
    exit();
}
?>
<?php 
require_once ('../../../../controller/system/planet/environment/allEnvironmentsController.php'); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Planet Details</title>
    <link rel="stylesheet" href="../../../../asset/system/planet/enviroment/environment.css">
    <link rel="icon" href="../../../../media/icons/saturn.ico" type="image/ico" sizes="16x16">
    
</head>
<body>
    <header>
        ENVIRONMENT CONDITIONS OF PLANETS
    </header>
    <nav>
        <a href="../../../dash/dashboard.php">Dashboard</a>
        <a href="../../allsystems.php">Solar Systems</a>
        <a href="../allplanets.php">Planets</a>
        <a href="../moon/allmoons.php">Moons</a>
        <a href="../../../mission/allmissions.php">Missions</a>
        <a href="http://localhost/Planetary-Database-Management-System/view/about.php">About</a>
        <a href="../../../../controller/auth/logoutController.php">Logout</a>
        
    </nav>

    <table>
        <tr>
            <th>Planet Name</th>
            <!-- 
            <th>Planet Mass</th>
            <th>Planet Type</th>
            <th>Planet Diameter (km)</th>
            <th>Distance from Sun (AU)</th> 
            -->
            <th>Has Surface</th>
            <th>Solar Radiation (W/m²)</th>
            <th>Magnetic Field Strength</th>
            <th>Gravity (m/s²)</th>
            <th>Atmosphere Composition</th>
            <th>Atmospheric Pressure (kPa)</th>
            <th>Temperature (°C)</th>
            <th>Thickness (km)</th>
            <th>Water Presence</th>
            <th>State</th>
        </tr>

    <?php foreach ($combinedData as $condition): ?>
        <tr>
            <td><?php echo $condition['PLANET_NAME']; ?></td> 
            <?php 
            /*<td><?php echo $condition['PLANET_MASS']; ?></td>
            <td><?php echo $condition['PLANET_TYPE']; ?></td>
            <td><?php echo $condition['PLANET_DIAMENTER_KM']; ?></td>
            <td><?php echo $condition['PLANET_DISTANCE_FROM_SUN_AU']; ?></td>
            */
            ?>
            <td><?php echo $condition['HAS_SURFACE'] === 'Y' ? 'Yes' : 'No'; ?></td>
            <td><?php echo $condition['SOLAR_RADIATION_W_M2']; ?></td>
            <td><?php echo $condition['MAGNETIC_FIELD_STRENGTH']; ?></td>
            <td><?php echo $condition['GRAVITY_M_S2']; ?></td>
            <td><?php echo $condition['COMPOSITION']; ?></td>
            <td><?php echo $condition['PRESSURE_KPA']; ?></td>
            <td><?php echo $condition['TEMPERATURE_C']; ?></td>
            <td><?php echo $condition['THICKNESS']; ?></td>
            <td><?php echo $condition['PRESENCE'] === 'Y' ? 'Yes' : 'No'; ?></td>
            <td><?php echo $condition['STATE']; ?></td>
        </tr>
    <?php endforeach; ?>
    </table>
    <footer>
        <p>Follow me on <a href="https://github.com/FardinUbaid" target="_blank">GitHub</a></p>
        <p>Contact: fardikenway7560@gmail.com</p>
    </footer>
</body>
</html>
