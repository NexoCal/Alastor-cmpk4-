<?php 

include 'dbkey.php';

$tablename = $_GET['table'];
$identifier = $_GET['idn'];
$target = $_GET['target'];

$comms = "DELETE FROM $tablename WHERE $identifier = '$target'";
if (mysqli_query($connexion,$comms)){
    echo "<script>alert('Data Successfully Deleted');</script>";
    echo '<META HTTP-EQUIV="Refresh" Content="0; URL=adminpageAkun.php">';
}else{

}
?>