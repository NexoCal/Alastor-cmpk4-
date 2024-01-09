<?php 

$hostserver = 'localhost';
$user = 'root';
$pass = '';
$dbname = 'cmpk4';

$connexion = mysqli_connect($hostserver,$user,$pass,$dbname);

if(!$connexion){
    die("Error" . mysqli_connect_error());
}
?>