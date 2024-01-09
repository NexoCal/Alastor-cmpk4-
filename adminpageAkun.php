<?php

include 'dbkey.php';
session_start();

$id = $_SESSION['LoggedID'];

$query = mysqli_query($connexion,"SELECT * FROM akun WHERE akun_id = '$id' ");
$result = mysqli_fetch_array($query,MYSQLI_ASSOC);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="adminpagestyle.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
</head>

<body>
    <div class="wrapper">
        <div class="main-content">
            <div class="navbar">
                <a href="#">Kelola Akun</a>
                <a href="adminpageData.php">Kelola Data</a>
                <a href="logout.php">Logout</a>
            </div>

            <div class="info-admin">
                <table class="info-table">
                    <tr class="info-table">
                        <td class="info-table"><h4>Akun ID</h4></td>
                        <td class="info-table">:</td>
                        <td class="info-table"><h4><?php echo $result['akun_id'] ?></h4>    </td>
                    </tr>
                    <tr class="info-table">
                        <td class="info-table"><h4>Username</h4></td>
                        <td class="info-table">:</td>
                        <td class="info-table"><h4><?php echo $result['username']  ?></h4></td>
                    </tr>
                    <tr class="info-table">
                        <td class="info-table"><h4>Email</h4></td>
                        <td class="info-table">:</td>
                        <td classs="info-table"><h4><?php echo $result['email']  ?></h4></td>
                    </tr>
                </table>
            </div>

            <div class="table-data">
                <table>
                    <thead>
                        <tr>
                            <td>AKUN ID</td>
                            <td>USERNAME</td>
                            <td>NAMA</td>
                            <td>EMAIL</td>
                            <td>ACTION</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $query = mysqli_query($connexion,"SELECT * FROM akun");
                        while ($result = mysqli_fetch_array($query,MYSQLI_ASSOC)){
                        ?>
                        <tr>
                            <td><?php echo $result['akun_id']?></td>
                            <td><?php echo $result['username']?></td>
                            <td><?php echo $result['password']?></td>
                            <td><?php echo $result['email']?></td>
                            <td>
                                <a href="editForm.php?target=<?php echo $result['akun_id']?>&table=akun&idn=akun_id"><button>EDIT</button></a>
                                <a href="deleteItem.php?target=<?php echo $result['akun_id']?>&table=akun&idn=akun_id"><button>DELETE</button></a>
                            </td>   
                        </tr>
                        <?php 
                        }
                        ?>
                    </tbody>
                </table>
            </div>

        </div>

    </div>
</body>

</html>