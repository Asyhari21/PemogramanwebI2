<?php
//menggunakan session
session_start();

if (isset($_SESSION['login'])) {
    header("Location: dashboard.php");
    exit;
}

include("koneksi.php");
if(isset($_POST['login'])) {
    $user = $_POST['username']; //mengambil id
    $pass = $_POST['password']; //mengambil password
    $query = "SELECT * FROM user WHERE username = '$user' AND password = '$pass'";
    $result = mysqli_query($koneksi, $query);
    // Digunakan untuk membuat session
    if (mysqli_num_rows($result) == 1) {
        $_SESSION['login'] = $user;
        header("location: dashboard.php");
    } else {
        $message = "<span>Username atau Password Salah!</span>";
    }
    
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Halaman Login</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="login.css">
</head>
<body>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="card mt-3 login-box">
          <div class="card-body">
            <h3 class="card-title text-center">L O G I N</h3>
            <form action="" method="post">
              <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control" name="username" id="username" placeholder="masukkan username">
              </div>
              <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" name="password" id="password" placeholder="masukkan password">
              </div>
              <br>
              <div class="d-grid gap-2">
                <button type="submit" class="btn btn-primary" name="login">Masuk</button>
              <?php if (isset($message)) : ?>
                <div class="message">
                    <?= $message ?>
                        </div>
            <?php endif; ?>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>
