<?php
$dbhost ="localhost";
$dbuser ="root";
$dbpass ="";
$dbname ="jovexride";

 $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
if(!$conn){
    die("could not connect to the database".mysqli_connect_error());
}
?>