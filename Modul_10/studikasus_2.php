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
    <img src="https://th.bing.com/th/id/OIP.pUZtpCyS1ZV_Be05_KVM5AAAAA?pid=ImgDet&rs=1"width=410px
    style="display: block;margin-left: auto;margin-right: auto; width=300px;border:8px solid #576CBC">
        <h3 align="center">
            "Selamat Datang "
        </h3> 
</body>
</html>
<?php
    session_start();
    if(isset($_SESSION['login'])) {
        echo "<h1>Selamat Datang, ". $_SESSION['login'] ."</h1><br>";
        echo "<h2>Halaman ini bisa tampil jika berhasil login. Ini adalah HOME (beranda) kamu.</h2><br>";
        echo "<h2>Klik <a href='studikasus_3.php'>disini (studikasus_3.php)</a> untuk logout (keluar)</h2><br>";
    } else {
        die ("<h2>Anda belum login! <a href='studikasus_1.php'>disini</h2></a");
    }
?>