<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $database = "pesquisa";
    $conection = mysqli_connect($host, $user, $pass) or die (mysqli_error());
    mysqli_select_db($conection, $database) or die (mysqli_error());
?>