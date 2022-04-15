<?php
session_start();

$username = $_POST["username"];
$password = $_POST["password"];

if($username == "Mehran" && $password == "202020")
{
    $_SESSION["login_status"] = true;
    header("location: admin_dashboard.php");
}
else
{
    header("location: admin_login.php");
}
?>

<?php include "footer.php" ?>
