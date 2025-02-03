<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../../asset/auth/login.css">
    <link rel="icon" href="../../media/icons/planetearth.ico" type="image/ico" sizes="16x16">
    <script defer src="../../js/auth/login.js"></script>
</head>
<body>
    <div class="container right-panel-active">
        <!-- Sign Up -->
        <div class="container__form container__form--signup">
            <form action="#" class="form" id="form1">
                <h2 class="form__title">Sign Up</h2>
                <h2 class="form__title">Sorry! this page is under construction😁</h2>
                <h2 class="form__title">Please Sign In instead</h2>
                <!-- <input type="text" placeholder="User Name" class="input" />
                <input type="email" placeholder="Email" class="input" />
                <input type="password" placeholder="Password" class="input" /> -->
                <button class="btn">Sign Up</button>
            </form>
        </div>

        <!-- Sign In -->
        <div class="container__form container__form--signin">
            <span>
                <?php
                session_start(); 
                echo isset($_SESSION['error']) ? $_SESSION['error'] : ''; ?>
            </span>
            <form action="../../controller/auth/loginController.php" method="post" class="form" id="form2">
                <h2 class="form__title">Sign In</h2>
                <input type="text" name="userid" placeholder="User ID" class="input" />
                <input type="password" name="password" placeholder="Password" class="input" />
                <a href="login.php" class="link">Forgot your password?</a>
                <button class="btn">Sign In</button>
            </form>
        </div>

        <!-- Overlay -->
        <div class="container__overlay">
            <div class="overlay">
                <div class="overlay__panel overlay--left">
                    <button class="btn" id="signIn">Sign In</button>
                </div>
                <div class="overlay__panel overlay--right">
                    <button class="btn" id="signUp">Sign Up</button>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
