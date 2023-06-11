<?php
    include "koneksi.php";
    $id = $_GET['id'];
    $query = mysqli_query($koneksi, "SELECT * FROM dataguru WHERE id = '$id'");
    $data = mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="edit.css">

<script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>
    <script>
        $(document).ready(function() {
            $('#data').DataTable();
        });

        function confirmUpdate() {
            return confirm("Apakah anda akan mengubah data?");
        }

    </script>
</head>
<body>
    <div class="kotax">
        <div class="teks">
            <h2 class="title">
            Perbarui data <?= $data['nama'] ?>
            </h2>
        </div>
    </div>
        <div class="container box mt-5">
                <div class="tekskiri">
                    <h3 class="title">Edit Data</h3>
                    <div class="d-flex justify-content-end align-items-end p-2 bd-highlight">
        <a href="dashboard.php" class= "btn btn-outline-info">Lihat Semua Data</a>
    </div>
                </div>
            <?php
            $data = mysqli_query($koneksi, "SELECT * from dataguru WHERE id='$id'") or die();
            $no = 1;
            while($d = mysqli_fetch_array($data)) {
                ?>
            <form action="perbarui.php" method="post" onsubmit="return confirmUpdate()">
                <input type="hidden" name="id" value="<?php echo $d['id'] ?> ">
                        <div class="form-group">
                            <label for="nip">NIP</label>
                            <input type="text" class="form-control" name="nip" id="nip" value="<?php echo $d['nip'] ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" name="nama" id="nama" value="<?php echo $d['nama'] ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="mata_pelajaran">Mata Pelajaran</label>
                            <input type="text" class="form-control" name="mata_pelajaran" id="mata_pelajaran" value="<?php echo $d['mata_pelajaran'] ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <textarea name="alamat" class="form-control" id="alamat" cols="30" rows="10" required><?php echo $d['alamat'] ?></textarea>
                        </div>
                        <br>
                        <br>
                        <div class="flex">
                            <button class="btn btn-success" type="submit" name="update_data">
                                Perbarui
                            </button>
                            <a href="dashboard.php" class="btn btn-danger">
                                Batal
                            </a>
                        </div>
                    </form>
            <?php
            }
            ?>
        </div>
    </div>
        <br>
        <br>
</body>
</html>