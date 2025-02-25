<?php
session_start();
if (!isset($_SESSION['auth_id'])) {
    header("Location: ../auth/login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About - Planetary Database Management System</title>
    <link rel="stylesheet" href="../asset/about.css">
    <link rel="icon" href="../media/icons/main.png" type="image/png" sizes="16x16">
</head>
<body>

<header>Planetary Database Management System</header>

<nav>
    <a href="http://localhost/Planetary-Database-Management-System/view/dash/dashboard.php">Dashboard</a>
</nav>


<div class="description">
    <h2>About the Planetary Database Management System</h2>
    <p>The <strong>Planetary Database Management System (PLDBMS)</strong> is a powerful and intuitive tool designed to catalog and manage vast planetary data. 
        It acts as a centralized knowledge hub, enabling researchers, space agencies, and enthusiasts to explore detailed planetary information, including size, composition, distance from the sun, 
        atmospheric properties, and more.</p>

    <p>With the rapid advancements in space exploration, PLDBMS remains future-proof by supporting real-time data updates from exploration missions and astronomical observations. 
        Whether studying known planets or discovering new exoplanets, this system ensures efficient data organization, making it an invaluable asset for both present and future interplanetary research.</p>
</div>


<div class="group-info">
    <h3>Meet Our Team</h3>
    <div class="team-container">
        <div class="team-member">
            <img src="../media/images/team/kousik.jpg" alt="Member 1">
            <p><strong>NAME: </strong> MUHTASIB IDTIDA KOUSIK</p>
            <p><strong>ID: </strong> 21-44864-2</p>
            <a href="https://github.com/muhtasib-ibtida" target="_blank">GitHub Profile</a>
        </div>
        <div class="team-member">
            <img src="../media/images/team/fardin.jpg" alt="Member 2">
            <p><strong>NAME: </strong>FARDIN ABU UBAID </p>
            <p><strong>ID: </strong> 21-44863-2</p>
            <a href="https://github.com/FardinUbaid" target="_blank">GitHub Profile</a>
        </div>
        <div class="team-member">
            <img src="../media/images/team/prottoy.jpg" alt="Member 3">
            <p><strong>NAME: </strong>PROTTOY SAHA </p>
            <p><strong>ID:</strong> 21-45640-3 </p>
            <a href="https://github.com/MaCroDmT" target="_blank">GitHub Profile</a>
        </div>
        <div class="team-member">
            <img src="../media/images/team/amit.jpg" alt="Member 4">
            <p><strong>NAME: </strong> AMIT HASAN RUHIN</p>
            <p><strong>ID:</strong> 21-44853-2</p>
            <a href="https://github.com/amit-ahr" target="_blank">GitHub Profile</a>
        </div>
    </div>
</div>

<footer>
    <p>Follow us on <a href="https://github.com/PLDBMS" target="_blank">GitHub</a></p>
    <p>Contact: contact@pldbms.com</p>
</footer>

</body>
</html>
