<?php
if(isset($_POST['userid']) && isset($_POST['password'])) {

$userid = $_POST['userid'];
$password = $_POST['password'];

if ($userid == "21-44863-2" && $password == "123" || $userid == "21-44864-2" && $password == "123" || $userid == "21-45640-3" && $password == "123" || $userid == "21-44853-2" && $password == "123") {
    session_start();
    $_SESSION['auth_id'] = $userid;
    header("Location: ../../view/dash/dashboard.php");
    exit();
} else {
    header("Location: ../../view/auth/login.php");
    session_start();
    $_SESSION['error'] = "Invalid Userid or Password";
    exit();
}

}
