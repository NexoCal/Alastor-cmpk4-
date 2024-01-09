<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="generalform.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <title>Document</title>
</head>

<body>
    <div class="form-container">
        <div class="form-box">
            <img src="hehe.jpeg" alt="">
            <form action="addItem.php" method="post">
                <input type="hidden" name="origin" value="akun">

                <label for="">Akun ID</label>
                <input type="text" name="id" id="" required>

                <label for="">Username</label>
                <input type="text" name="user" id="" required>

                <label for="">Email</label>
                <input type="email" name="mail" id="" required>

                <label for="">Password</label>
                <input type="password" name="pass" id="" required>

                <button type="submit">REGISTER</button>
                <a href="login.php" align="center">SIGN IN</a>
            </form>
            <div>
            </div>
        </div>
    </div>
</body>

</html>