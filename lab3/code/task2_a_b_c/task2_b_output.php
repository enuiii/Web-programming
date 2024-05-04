<?php
function redirectToHome(): void
{
    header('Location: /');
    exit();
}
session_start();
if (false === isset($_SESSION["firstname"], $_SESSION["lastname"], $_SESSION["age"])) {
    redirectToHome();
}
$firstName = $_SESSION["firstname"];
$lastName = $_SESSION["lastname"];
$age = $_SESSION["age"];
echo "$firstName". "<br>" . "$lastName" . "<br>" . "$age";