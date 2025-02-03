<?php
session_start();
if (!isset($_SESSION['auth_id'])) {
    header("Location: ../auth/login.php");
    exit();
}
?>
<?php
require_once ('../../controller/system/allsystemsController.php'); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>System List</title>
    <link rel="stylesheet" href="../../asset/system/system.css">
    <link rel="icon" href="../../media/icons/galaxy.ico" type="image/ico" sizes="16x16">
    
</head>
<body>
    <header>
        Solar Systems
    </header>
    <nav>
        <a href="../dash/dashboard.php">Dashboard</a>
        <a href="planet/allplanets.php">Planets</a>
        <a href="planet/environment/allenvironments.php">Environment</a>
        <a href="planet/moon/allmoons.php">Moons</a>
        <a href="../mission/allmissions.php">Missions</a>
        <a href="http://localhost/pldbms/view/about.php">About</a>
        <a href="../../controller/auth/logoutController.php">Logout</a>
        
    </nav>
    <table>
        <tr>
            <th>Star Type</th>
            <th>Solar System?</th>
            <th>Star System Type</th>
            <th>View Planets</th>
        </tr>
        <?php
        //var_dump($system); 
        if (!empty($system)): ?>
            <?php foreach ($system as $system): ?>
                <tr>
                    <td><?= htmlspecialchars($system['STAR_TYPE']) ?></td>
                    <td><?= htmlspecialchars($system['IS_PART_OF_SOLAR_SYSTEM']) ?></td>
                    <td><?= htmlspecialchars($system['STAR_SYSTEM_TYPE']) ?></td>
                    <td><?php
                        if($system['IS_PART_OF_SOLAR_SYSTEM'] == 'Y'){?>
                            <form action="../../controller/system/planet/planetbyidController.php" method="post">

                                <input type="hidden" name="system_id" value="<?php echo $system['SYSTEM_ID'] ?>">

                                <button type="submit" name="submit" class="btn">View Planets</button>
                            </form>
                        <?php }else{
                            echo "No Planets";
                        }?></td>
                </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr><td colspan="4">No Systems found.</td></tr>
        <?php endif; ?>
    </table>
    <footer>
        <p>Follow me on <a href="https://github.com/FardinUbaid" target="_blank">GitHub</a></p>
        <p>Contact: fardikenway7560@gmail.com</p>
    </footer>
</body>
</html>
