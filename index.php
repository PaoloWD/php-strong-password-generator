<?php
include_once __DIR__ . "/utilities.php";
if (isset($_GET["password"])) {
    var_dump(generatePassword($_GET["password"]));
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