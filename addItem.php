<?php 

include 'dbkey.php';

$origin = $_POST['origin'];

$id = $_POST['id'];
$user = $_POST['user'];
$pass = $_POST['pass'];
$mail = $_POST['mail'];

$comms = "INSERT INTO $origin (akun_id, username, `password`, email) values ('$id','$user','$pass','$mail')";
if (mysqli_query($connexion,$comms)){
    echo "<script>alert('Registerd, Welcome $user');</script>";
    echo '<META HTTP-EQUIV="Refresh" Content="0; URL=login.php">';
}else{

}
?>