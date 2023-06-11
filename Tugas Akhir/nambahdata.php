<?php
    include ("koneksi.php");
    if (isset($_POST['tambah_data'])) {
        $nip = $_POST['nip'];
        $nama = $_POST['nama'];
        $matapelajaran = $_POST['mata_pelajaran'];
        $alamat = $_POST['alamat'];
    
        $query = mysqli_query($koneksi, "INSERT INTO dataguru (nip, nama, mata_pelajaran, alamat) VALUES ('$nip', '$nama', '$matapelajaran', '$alamat')");
    
        if ($query) {
            $message = (object) [
                'type' => 'success',
                'text' => 'Berhasil menambah data'
            ];
            header("location: dashboard.php");
        } else {
            echo "Gagal tambah data";
        }
    }

    if (isset($_POST['log-out'])) {
        session_destroy();
        header("location: login.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nambah Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="nambahdata.css">

    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>
    <script>
        $(document).ready(function() {
            $('#data').DataTable();
        });
        function confirmInsert() {
            return confirm("Apakah anda akan menambahkan data?");
        }
    </script>
</head>
<body>
            <div class="kotax">
                <div class="teks">
                    <h2 class="title">DASHBOARD DATA</h2>
                </div>
            </div>
            <br>
        <div class="container box">
            <br>
                <h4>
                    Tambahkan Data Guru
                </h4>
            <form action="" method="post" onsubmit="return confirmInsert()">
                    <div class="form-group">
                        <label for="nip">NIP</label>
                        <input type="text" class="form-control" name="nip" id="nip" required>
                    </div>
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" name="nama" id="nama" required>
                    </div>
                    <div class="form-group">
                        <label for="mata pelajaran">Mata Pelajaran</label>
                        <input type="text" class="form-control" name="mata pelajaran" id="mata pelajaran" required>
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <textarea name="alamat" class="form-control" id="alamat" cols="20" rows="10" required></textarea>
                    </div>
                    <div class="flex">
                        <button class="btn btn-success" type="submit" name="tambah_data">
                            Konfirmasi
                        </button>
                        <a href="dashboard.php" class="btn btn-danger">
                            Batal
                        </a>
                    </div>
            </form>
            <br>
        <br>
        </div>
        
</body>
</html>