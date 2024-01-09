<?php

include 'dbkey.php';
session_start();




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
                <a href="adminpageAkun.php">Kelola Akun</a>
                <a href="#">Kelola Data</a>
                <a href="logout.php">Logout</a>
            </div>

            <div class="info-admin">
                <table class="info-table">
                    <tr class="info-table">
                        <td class="info-table">
                            <h4>Akun ID</h4>
                        </td>
                        <td class="info-table">:</td>
                        <td class="info-table">
                            <h4><?php echo $_SESSION['LoggedID'] ?></h4>
                        </td>
                    </tr>
                    <tr class="info-table">
                        <td class="info-table">
                            <h4>Username</h4>
                        </td>
                        <td class="info-table">:</td>
                        <td class="info-table">
                            <h4><?php echo $_SESSION['LoggedUser'] ?></h4>
                        </td>
                    </tr>
                    <tr class="info-table">
                        <td class="info-table">
                            <h4>Email</h4>
                        </td>
                        <td class="info-table">:</td>
                        <td class="info-table">
                            <h4><?php echo $_SESSION['LoggedMail'] ?></h4>
                        </td>
                    </tr>
                </table>
            </div>

            <div class="table-data">
                <table>
                    <thead>
                        <tr>
                            <td>NIM</td>
                            <td>NAMA</td>
                            <td>EMAIL</td>
                            <td>ACTION</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $query = mysqli_query($connexion, "SELECT * FROM mahasiswa");
                        while ($result = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
                        ?>
                            <tr>
                                <td><?php echo $result['nim'] ?></td>
                                <td><?php echo $result['nama'] ?></td>
                                <td><?php echo $result['email'] ?></td>
                                <td>
                                    <a href="editForm.php?target=<?php echo $result['nim'] ?>&table=mahasiswa&idn=nim"><button>EDIT</button></a>
                                    <a href="deleteItem.php?target=<?php echo $result['nim'] ?>&table=mahasiswa&idn=nim"><button>DELETE</button></a>
                                </td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>

                <table>
                    <thead>
                        <tr>
                            <td>KODE_MK</td>
                            <td>NAMA_MK</td>
                            <td>SKS</td>
                            <td>ACTION</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $query = mysqli_query($connexion, "SELECT * FROM mata_kuliah");
                        while ($result = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
                        ?>
                            <tr>
                                <td><?php echo $result['kode_mk'] ?></td>
                                <td><?php echo $result['nama_mk'] ?></td>
                                <td><?php echo $result['sks'] ?></td>
                                <td>
                                    <a href="editForm.php?target=<?php echo $result['kode_mk'] ?>&table=mata_kuliah&idn=kode_mk"><button>EDIT</button></a>
                                    <a href="deleteItem.php?target=<?php echo $result['kode_mk'] ?>&table=mata_kuliah&idn=kode_mk"><button>DELETE</button></a>
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