<?php
session_start();
include_once __DIR__ . "/utilities.php";
if (isset($_GET["password"])) {
    $_SESSION["newPassword"] = $_GET["password"];
    header("Location: showPassword.php");
   
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>STRONG PASSWORD</title>
</head>
<body>
    <form action="" method="GET">
        <input type="number" name="password">
        <button>Genera Password</button>
    </form>
</body>
</html>