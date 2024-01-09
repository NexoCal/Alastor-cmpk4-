<?php

include 'dbkey.php';

$tablename = $_GET['table'];
$identifier = $_GET['idn'];
$target = $_GET['target'];

$query = mysqli_query($connexion, "SELECT * FROM $tablename WHERE $identifier = '$target'");
$result = mysqli_fetch_array($query, MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
</head>

<body>
    <div>
        <div>
            <?php
            if ($tablename == 'mahasiswa') {
            ?>
                <form action="editItem.php" method="post">
                    <input type="hidden" name="table" value="<?php echo $tablename ?>" required>
                    <input type="hidden" name="target" value="<?php echo $target ?>" required>
                    <input type="hidden" name="idn" value="<?php echo $identifier ?>" required>

                    <label for="">NIM</label><br>
                    <input type="text" name="nim" id="" value="<?php echo $result['nim'] ?>"><br>

                    <label for="">Nama</label><br>
                    <input type="text" name="nama" id="" value="<?php echo $result['nama'] ?>"><br>

                    <label for="">Email</label><br>
                    <input type="email" name="Mail" id="" value="<?php echo $result['email'] ?>"><br>

                    <button type="submit">Edit</button>
                </form>
            <?php
            } elseif ($tablename == 'mata_kuliah') {
            ?>
                <form action="editItem.php" method="post">
                    <input type="hidden" name="table" value="<?php echo $tablename ?>" required>
                    <input type="hidden" name="target" value="<?php echo $target ?>" required>
                    <input type="hidden" name="idn" value="<?php echo $identifier ?>" required>

                    <label for="">Kode Matakuliah</label><br>
                    <input type="text" name="kode" id="" value="<?php echo $result['kode_mk'] ?>"><br>

                    <label for="">Nama Matakuliah</label><br>
                    <input type="text" name="nama" id="" value="<?php echo $result['nama_mk'] ?>"><br>

                    <label for="">SKS</label><br>
                    <input type="number" name="sks" id="" value="<?php echo $result['sks'] ?>"><br>

                    <button type="submit">Edit</button>
                </form>
            <?php
            } else {
            ?>
                <form action="editItem.php" method="post">
                    <input type="hidden" name="table" value="<?php echo $tablename ?>" required>
                    <input type="hidden" name="target" value="<?php echo $target ?>" required>
                    <input type="hidden" name="idn" value="<?php echo $identifier ?>" required>

                    <label for="">Akun ID</label><br>
                    <input type="text" name="ID" id="" value="<?php echo $result['akun_id'] ?>"><br>

                    <label for="">Username</label><br>
                    <input type="text" name="User" id="" value="<?php echo $result['username'] ?>"><br>

                    <label for="">Password</label><br>
                    <input type="text" name="Pass" id="" value="<?php echo $result['password'] ?>"><br>

                    <label for="">Email</label><br>
                    <input type="text" name="Mail" id="" value="<?php echo $result['email'] ?>"><br>

                    <button type="submit">Edit</button>
                </form>
            <?php
            }
            ?>

        </div>
    </div>
</body>

</html>