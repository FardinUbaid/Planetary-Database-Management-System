<?php
session_start();
if (!isset($_SESSION['auth_id'])) {
    header("Location: ../../auth/login.php");
    exit();
}


$planets = $_SESSION['planets'] ?? [];
$msg = $_SESSION['error'] ?? null;


unset($_SESSION['planets'], $_SESSION['error']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Planet List</title>
    <link rel="stylesheet" href="../../../asset/system/planet/planet.css">
    <link rel="icon" href="../../../media/icons/galaxy.ico" type="image/ico" sizes="16x16">
</head>
<body>
    <header>
        PLANETS
    </header>
    <nav>
        <a href="http://localhost/pldbms/view/about.php">About</a>
        <a href="../../../controller/auth/logoutController.php">Logout</a>
    </nav>
    <a href="../allsystems.php" style="display: block; width: 100%; text-align: center; text-decoration: none;">
    <button style="width: 100%; padding: 10px; font-size: 16px; border: none; background-color:rgb(255, 0, 81); color: white; cursor: pointer;">
        Back
    </button>
    </a>
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Mass (10^24 kg)</th>
                <th>Type</th>
                <th>Diameter (km)</th>
                <th>Distance from Sun (AU)</th>
                <th>Has Surface</th> 
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($planets)): ?>
                <?php foreach ($planets as $planet): ?>
                    <tr>
                        <td><?= htmlspecialchars($planet['PLANET_NAME']) ?></td>
                        <td><?= htmlspecialchars($planet['PLANET_MASS']) ?></td>
                        <td><?= htmlspecialchars($planet['PLANET_TYPE']) ?></td>
                        <td><?= htmlspecialchars($planet['PLANET_DIAMENTER_KM']) ?></td>
                        <td><?= htmlspecialchars($planet['PLANET_DISTANCE_FROM_SUN_AU']) ?></td>
                        <td><?= ($planet['HAS_SURFACE'] === 'Y' ? 'Yes' : 'No') ?></td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
            <tr><td colspan="6">    
                <?php if ($msg): ?>
                    <center>
                        <p style="color: red;"><?= htmlspecialchars($msg) ?></p>
                    </center>
                <?php endif; ?>
            </td></tr>
            <?php endif; ?>
        </tbody>
    </table>

    <footer>
        <p>Follow me on <a href="https://github.com/FardinUbaid" target="_blank">GitHub</a></p>
        <p>Contact: fardikenway7560@gmail.com</p>
    </footer>
</body>
</html>
