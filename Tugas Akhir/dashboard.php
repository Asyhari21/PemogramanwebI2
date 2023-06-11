<?php
    include ("koneksi.php");
    session_start();
    if (!isset($_SESSION['login'])) {
        header("Location: login.php");
        exit;
    }

    if (isset($_POST['tambah_data'])) {
        $id = $_POST['id'];
        $nip = $_POST['nip'];
        $nama = $_POST['nama'];
        $matapelajaran = $_POST['mata_pelajaran'];
        $alamat = $_POST['alamat'];
    
        $query = mysqli_query($koneksi, "INSERT INTO dataguru (id, nip, nama, mata_pelajaran, alamat) VALUES ('$id', '$nip', '$nama', '$matapelajaran', '$alamat')");
    
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
    <title>Dashboard Data Guru</title>
    <!-- Merupakan link untuk menambahkan bootsraps dan datatables -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css" >
    <link rel="stylesheet" href="dashboard.css">

    <!-- Merupakan Script Javascript yang digunakan -->
    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>
    <script>
        $(document).ready(function() {
            $('#data').DataTable();
        });
        function confirmLogout() {
            return confirm("Apakah anda ingin keluar?");
        }

        function confirmInsert() {
            return confirm("Apakah anda ingin menambahkan data?");
        }

        function confirmUpdate() {
            return confirm("Apakah anda ingin mengubah data?");
        }

        function confirmDelete() {
            return confirm("Apakah anda ingin menghapus data?");
        }
    </script>
</head>
<body>
<div class="kotax">
                <div class="teks">
                    <div class="d-flex justify-content-center">
                    <h2 class="title">DASHBOARD DATA GURU</h2>
                    <div class="logout">
                    <div class="d-flex position-absolute top-1 end-0 align-items-center me-5">
                        <form action="" method="post" onsubmit="return confirmLogout()">
                            <button class="btn btn-danger" type="submit" name="log-out">
                                Keluar
                            </button>
                        </form>
                </div>
                    </div>
                    </div>    
                </div>
            </div>
    <br>
    <br>
    <div class="container box">
                <div class="tekskiri">
                        <h3 class="title">Data Guru SDN 1 Pacar</h3>
                        <div class="d-flex justify-content-end align-items-end p-2 bd-highlight">
                <form action="nambahdata.php" method="post">
                    <button class="ms-3 btn btn-success " type="submit" name="tambah">
                        Tambahkan Data
                    </button>
                </form>
            </div>
                </div>
            <br>
                
                <div class="box">
                <table class="table " id="data">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>NIP</th>
                                <th>Nama</th>
                                <th>Mata Pelajaran</th>
                                <th>Alamat</th>
                                <th>Menu Pilihan</th>

                            </tr>
                        </thead>
                    <tbody>
                </div>
            <?php
            include ("koneksi.php");
            $no = 1;
            $data = mysqli_query($koneksi, "SELECT * from dataguru");
            while($d = mysqli_fetch_array($data)) {
                ?>

                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $d['nip']; ?></td>
                    <td><?php echo $d['nama']; ?></td>
                    <td><?php echo $d['mata_pelajaran']; ?></td>
                    <td><?php echo $d['alamat']; ?></td>
                    <td>
                        <a class="btn btn-secondary" href="lihat.php?id=<?php echo $d['id']; ?>">Lihat</a>
                        <a class="btn btn-secondary" href="edit.php?id=<?php echo $d['id']; ?>">Edit</a>
                        <a class="btn btn-secondary" onclick="return confirmDelete()" href="hapus.php?id=<?php echo $d['id']; ?>">Hapus</a>
                    </td>
                </tr>
                
                <?php
            }
            ?>
            </table>
            
    </div>
</body>
</html>