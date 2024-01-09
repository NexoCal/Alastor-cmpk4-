<?php

include 'dbkey.php';

$tablename = $_POST['table'];
$identifier = $_POST['idn'];
$target = $_POST['target'];

if ($tablename == 'mahasiswa') {
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $mail = $_POST['Mail'];


    $comms = "UPDATE $tablename SET nim = '$id', nama = '$nama', email= '$mail'  WHERE $identifier = '$target'";
    if (mysqli_query($connexion, $comms)) {
        echo "<script>alert('Data Edited');</script>";
        echo '<META HTTP-EQUIV="Refresh" Content="0; URL=adminpageData.php">';
    } else {
    }
} elseif ($tablename == 'mata_kuliah') {
    $kodemk = $_POST['kode'];
    $namamk = $_POST['nama'];
    $sks = $_POST['sks'];


    $comms = "UPDATE $tablename SET kode_mk = '$kodemk', nama_mk = '$namamk', sks = $sks WHERE $identifier = '$target'";
    if (mysqli_query($connexion, $comms)) {
        echo "<script>alert('Data Edited');</script>";
        echo '<META HTTP-EQUIV="Refresh" Content="0; URL=adminpageData.php">';
    } else {
    }
} else {
    $id = $_POST['ID'];
    $user = $_POST['User'];
    $pass = $_POST['Pass'];
    $mail = $_POST['Mail'];


    $comms = "UPDATE $tablename SET akun_id = '$id', username = '$user', `password` = '$pass', email= '$mail'  WHERE $identifier = '$target'";
    if (mysqli_query($connexion, $comms)) {
        echo "<script>alert('Data Edited');</script>";
        echo '<META HTTP-EQUIV="Refresh" Content="0; URL=adminpageAkun.php">';
    } else {
    }
}
