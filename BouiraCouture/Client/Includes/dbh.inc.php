<?php

$servername ="localhost";
$dBUsername ="root";
$dBpassword = "";
$dBName ="bouiracouture";

$conn = mysqli_connect($servername, $dBUsername, $dBpassword, $dBName);
$conn->set_charset("utf8mb4");
if (!$conn){

    die("Conection failed :".mysqli_connect_error());
}
