<?php
    include "koneksi.php";
    $id = $_GET['id'];
    mysqli_query($koneksi, "DELETE FROM dataguru WHERE id='$id'") or die();

    header("location:dashboard.php?pesan=hapus");
?>