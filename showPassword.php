<?php
session_start();
include_once __DIR__ . "/utilities.php";
var_dump(generatePassword($_SESSION["newPassword"]));
?>