<?php
    session_start();
    if (isset($_SESSION['login'])) {
        unset ($_SESSION);
        session_destroy();
        echo "<h1>Kamu sudah berhasil login/keluar</h1>";
        echo "<h2>Klik <a href='session.php'>disini</a> untuk login lagi.<br>Kamu tidak bisa masuk ke <a href='session2.php'>HOME (beranda)</a>lagi.</h2>";
    }
?>