
<?php

$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "nrsppdata";

$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

       $List = isset($_POST["list"]); 
       $Insert = isset($_POST["insert"]);


       $sql = "INSERT INTO welcometb (user_sector, user_mainrevearner)
               VALUES ('$List', '$Insert')";
       mysqli_query($conn, $sql);


?>