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
    <title>Dashboard</title>
    <link rel="stylesheet" href="../../asset/dash/dashboard.css">
    <link rel="icon" href="../../media/icons/main.png" type="image/png">
</head>
<body>
    <header>
        PLDBMS Dashboard
    </header>
    <nav>
        <a href="../system/allsystems.php">Solar Systems</a>
        <a href="../system/planet/allplanets.php">Planets</a>
        <a href="../system/planet/environment/allenvironments.php">Environment</a>
        <a href="../system/planet/moon/allmoons.php">Moons</a>
        <a href="../mission/allmissions.php">Missions</a>
        <a href="http://localhost/pldbms/view/about.php">About</a>
        <a href="../../controller/auth/logoutController.php">Logout</a>
        
    </nav>
    <div class="slideshow-container">
        <img class="active" src="../../media/images/1.jpg" alt="Image 1">
        <!-- <img src="../../media/images/2.jpg" height="50" alt="Image 2"> -->
        <img src="../../media/images/3.jpg" alt="Image 3">
        <img src="../../media/images/4.jpg" alt="Image 4">
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
    </div>
    <footer>
        <p>Follow me on <a href="https://github.com/FardinUbaid" target="_blank">GitHub</a></p>
        <p>Contact: fardikenway7560@gmail.com</p>
    </footer>
    <script>
        let slideIndex = 0;
        showSlides();

        function showSlides() {
            let slides = document.querySelectorAll(".slideshow-container img");
            for (let i = 0; i < slides.length; i++) {
                slides[i].classList.remove("active");
            }
            slideIndex++;
            if (slideIndex > slides.length) {slideIndex = 1}
            slides[slideIndex-1].classList.add("active");
            setTimeout(showSlides, 5000); 
        }

        function plusSlides(n) {
            slideIndex += n - 1;
            showSlides();
        }
    </script>
</body>
</html>
