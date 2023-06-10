<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman login berhasil</title>
    <style>
     *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Poppins', sans-serif;
        color: #F9F5F6;
    }
    </style>
</head>
<body bgcolor="526D82">
    <img src="https://th.bing.com/th/id/OIP.fGJDpCZgq-9V1uywO3GARQHaFj?pid=ImgDet&rs=1"width=410px
    style="display: block;margin-left: auto;margin-right: auto; width=300px;border:8px solid #576CBC">
    <font color="#F9F5F6">
        <h3 align="center">
            "Selamat tinggal, kenapa ente log out "
        </h3> 
    </font>
</body>
</html>
<!-- Merupakan form php -->
<?php
    session_start();
    if (isset($_SESSION['login'])) {
        unset($_SESSION);
        session_destroy();
        echo "<h1> Kamu sudah berhasil logout/Keluar</h1>";
        echo "<h1>Klik <a href='studikasus_1.php'>disini</a> untuk login lagi.<br> Kamu tidak dapat masuk ke 
        <a href='studikasus_2.php'>HOME (beranda) </a> lagi.</h2>";
    }
?>