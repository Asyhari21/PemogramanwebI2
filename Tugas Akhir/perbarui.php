<?php
    include "koneksi.php";
    $id = $_POST['id'];
    $nip = $_POST['nip'];
    $nama = $_POST['nama'];
    $matapelajaran = $_POST['mata_pelajaran'];
    $alamat = $_POST['alamat'];

    mysqli_query($koneksi, "UPDATE dataguru SET nip='$nip',nama='$nama',mata_pelajaran='$matapelajaran',alamat='$alamat' WHERE id='$id'");

    header("location:dashboard.php?pesan=update");
?>