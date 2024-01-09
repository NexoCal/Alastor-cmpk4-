<?php 

include 'dbkey.php';
session_start();

$User = $_POST['user'];
$pass = $_POST['pass'];

$query = mysqli_query($connexion,"SELECT * FROM akun WHERE username = '$User' ");
$result = mysqli_fetch_array($query,MYSQLI_ASSOC);

if ($pass == $result['password']){
    $_SESSION['LoggedID'] = $result['akun_id'];
    $_SESSION['LoggedUser'] = $result['username'];
    $_SESSION['LoggedMail'] = $result['email'];
    header("Location:adminpageAkun.php");

}else{
    header("Location:login.php");
}



?>