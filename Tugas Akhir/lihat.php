<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="lihat.css">
    <title>Lihat Detail Data</title>
    
</head>
<body>
        <div class="kotax">
            <div class="judul teks">
                <h2>-TAMPILAN DATA GURU-</h2>
            </div>
        </div>
        <br>
        <br>
        <div class="container box">
            <div class="tekskiri">
                <h3 class="title">
                    Info Data Guru
                </h3>
            </div>
            <br>
        <?php
                include ("koneksi.php");
                $id = $_GET['id'];
                $data = mysqli_query($koneksi, "SELECT * from dataguru WHERE id='$id'") or die('koneksi gagal');
                $no = 1;
                while($d = mysqli_fetch_array($data)){
                ?>
                    <table>
                        <tr>
                            <td>NIP</td>
                            <td>: <?php echo $d['nip'] ?></td>
                        </tr>
                        <tr>
                            <td>Nama</td>
                            <td>: <?php echo $d['nama'] ?></td>
                        </tr>
                        <tr>
                            <td>Mata Pelajaran</td>
                            <td>: <?php echo $d['mata_pelajaran'] ?></td>
                        </tr>
                        <tr>
                            <td>Alamat</td>
                            <td>: <?php echo $d['alamat'] ?></td>
                        </tr>
                        <tr></tr>
                    </table>
                    <?php
                } ?>
            <br>
            <br>
            <div class="judul teks">
            <a href="dashboard.php" class="btn btn-danger">Kembali ke Dashboard</a>
            </div>
        </div>
        <br>
</body>
</html>