<?php
session_start();
if (!isset($_SESSION['auth_id'])) {
    header("Location: ../../../auth/login.php");
    exit();
}
?>

<?php
require_once ('../../../../controller/system/planet/moon/allmoonsController.php'); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Moons List</title>
    <link rel="stylesheet" href="../../../../asset/system/planet/moon/moon.css">
    <link rel="icon" href="../../../../media/icons/saturn.ico" type="image/ico" sizes="16x16">
    
</head>
<body>
    <header>
        MOONS
    </header>
    <nav>
        <a href="../../../dash/dashboard.php">Dashboard</a>
        <a href="../../allsystems.php">Solar Systems</a>
        <a href="../allplanets.php">Planets</a>
        <a href="../environment/allenvironments.php">Environment</a>
        <a href="../../../mission/allmissions.php">Missions</a>
        <a href="http://localhost/pldbms/view/about.php">About</a>
        <a href="../../../../controller/auth/logoutController.php">Logout</a>
        
    </nav>
    <table>
        <tr>
            <th>Moon Name</th>
            <!-- <th>Planet ID</th> -->
            <th>Moon Diameter (KM)</th>
            <th>Orbital Period (Days)</th>
        </tr>
        <?php 
        //$moon['PLANET_ID']
        if (!empty($moons)): ?>
            <?php foreach ($moons as $moon): ?>
                <tr>
                    <td><?= htmlspecialchars($moon['MOON_NAME']) ?></td>
                    <td><?= htmlspecialchars($moon['MOON_DIAMETER_KM']) ?></td>
                    <td><?= htmlspecialchars($moon['ORBITAL_PERIOD_DAYS']) ?></td>
                </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr><td colspan="4">No Moons found.</td></tr>
        <?php endif; ?>
    </table>
    <footer>
        <p>Follow me on <a href="https://github.com/FardinUbaid" target="_blank">GitHub</a></p>
        <p>Contact: fardikenway7560@gmail.com</p>
    </footer>
</body>
</html>
