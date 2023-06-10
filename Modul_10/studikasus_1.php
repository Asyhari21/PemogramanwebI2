<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
                <title>Login</title>
                <link rel="stylesheet" type="text/css" href="studikasus.css">
                <!-- Merupakan Script Javascript -->
                <script type="text/javascript">
                    function validateForm() {
                        var id = document.forms["loginForm"]["id"].value;
                        var password = document.forms["loginForm"]["password"].value;
                        if (id == "" || password == "") {
                            alert("ID/Username dan Password tidak boleh kosong.");
                            if (id == "") {
                                document.forms["loginForm"]["id"].focus();
                            } else {
                                document.forms["loginForm"]["password"].focus();
                            }
                            return false;
                        } else if (!/^[a-zA-Z]+$/.test(id) || !/^[a-zA-Z]+$/.test(password)) {
                            alert("ID/Username dan Password harus huruf.");
                            return false;
                        }
                    }
                </script>
    </head>
<body style=background-color: aqua;></body>
    <div class="login-box">
        <h2>L O G I N</h2>

        <form name="loginForm" action="<?php $_SERVER['PHP_SELF']?>" method="post" onsubmit="return validateForm()">
            <!-- Class usernmame -->
            <div class="user-box">
                <input type="text" name="id" id="id">
                <label for="id">Username</label>
            </div>
            <!-- Class password -->
            <div class="user-box">
                <input type="password" name="password" id="password">
                <label for="password">Password</label>
            </div>
        <input class="submit-button" type="submit" value="Login" name="login">
    </form>
    </div>

    <!-- Studi kasus modul 10 -->
    <!-- PHP -->
    <?php
        //menggunakan session
        session_start();
        if(isset($_POST['login'])) {
            $user = $_POST['id']; //mengambil id
            $pass = $_POST['password']; //mengambil password
            // Digunakan untuk membuat session
            if ($user == "ari" && $pass == "asyhari") {
                $_SESSION['login'] = $user;
                header("location: studikasus_2.php");
            } else {
                echo "login gagal";
            }
        }
    ?>
</body>
</html>