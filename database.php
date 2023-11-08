<?php
$hostname = "localhost";
$dbuser = "root";
$dbPassword  ="";
$dbName = "websitelogin";
$conn = mysqli_connect($hostname,$dbuser,$dbPassword,$dbName);
if(!$conn){
    die ("something went wrong;");
}
?>