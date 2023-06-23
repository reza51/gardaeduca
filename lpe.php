<?php

@include "connect.php";
session_start();
if (isset($_POST['submit'])) {

    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $unm = mysqli_real_escape_string($conn, $_POST['usernm']);



    $select = " SELECT * FROM pay WHERE email = '$email' and username='$unm'";
    $result = mysqli_query($conn, $select);

    if (mysqli_num_rows($result) > 0) {

        $row = mysqli_fetch_array($result);

        if ($row['member'] == 'common') {

            $_SESSION['common_user'] = $row['email'];

            header('location:mp.php');

        } elseif ($row['member'] == 'elite') {

            $_SESSION['elite_user'] = $row['email'];
            header('location:mpe.php');

        }

    } else {
        $error[] = 'AKUN ANDA BELUM TERDAFTAR SILAHKAN DAFTAR TERLEBIH DAHULU!';
    }

}
;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="lp1.css">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <title>LANDING PAGE | ZoneMovies </title>
</head>

<body>
    <div class="container">
        <nav class="navbar">
            <div class="left">
                <img src="img/z1.png">

            </div>
            <div class="right">
                <select name="bhs" class="bhs">
                    <option value="COMMON">COMMON</option>
                    <option value="ELITE">ELITE</option>
                </select>
                <button><a href="member.php">Daftar</a></button>
            </div>
        </nav>



        <div class="title">
            <div class="content">
                <h1>Nikmati Semua Film Favoritmu.</h1>
                <form action="mpe.php" method="post">
                    <h3>SILAHKAN LOGIN UNTUK MENONTON!</h3>
                    <div class="email">
                        <input type="text" name="un" id="" placeholder="UsernameAnda" required><br>
                    </div>
                    <div class="email">
                        <input type="email" name="email" placeholder="email123@gmail.com" required>
                        <button type="submit" name="submit">LOGIN</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


</body>

</html>