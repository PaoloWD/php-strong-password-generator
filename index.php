<?php
session_start();
include_once __DIR__ . "/utilities.php";
if (isset($_POST["passwordLength"])) {
    $length = $_POST["passwordLength"];
    $repeat = $_POST["choice"] ?? '';
    $letters = $_POST["letters"] ?? 0;
    $numbers = $_POST["numbers"] ?? 0;
    $simbols = $_POST["symbols"] ?? 0;
    $newPassword = generatePassword($length, $repeat, $letters, $numbers, $simbols);
    $_SESSION["newPassword"] = $newPassword;
    
    header("Location: showPassword.php");
   
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>STRONG PASSWORD</title>
</head>
<body class="bg-dark">
    <div class="container">
        <div class="text-white">
            <h2 class="text-center">Genera una nuova password</h2>
            <div class="banner"></div>
            <div class="bg-white text-dark">
                <div class="d-flex gap-3">
                    <div>
                        Lunghezza password: 
                    </div>
                    
                </div>
                <div class="d-flex gap-5">
                    <div>
                        Consenti ripetizioni di uno o più caratteri: 
                    </div>
                    <div>
                        <form method="POST" action="">
                            <input type="number" name="passwordLength"><br>
                            <input type="radio" name="choice" value="Sì">
                            <label for="Sì">Sì</label><br>
                            <input type="radio" name="choice" value="No">
                            <label for="No">No</label><br>
                            <input type="checkbox" id="lettere" name="letters" value="1">
                            <label for="letters">Lettere</label><br>
                            <input type="checkbox" id="numeri" name="numbers" value="1">
                            <label for="numbers">Numeri</label><br>
                            <input type="checkbox" id="symbols" name="symbols" value="1">
                            <label for="symbols">Simboli</label><br>
                        </form>
                    </div>
                </div>
                <button class="btn btn-primary" type="submit">Genera Password</button>
                <a href="index.php" class="btn btn-danger">Reset</a>
            </div>

        </div>
    </div>
</body>
</html>