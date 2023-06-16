    <!-- Studi kasus modul 12 -->
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
                header("location: studikasus2.php");
            } else {
                echo "login gagal";
            }
        }
    ?>

<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Studi kasus 12</title>
                <title>Login</title>
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
        <style>
                    *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins';
        }
        body{
            background-color: #05115e;
        }
        .login-box{
            width: 320px;
            height: 420px;
            background: #020827;
            color: #fff;
            top: 50%;
            left: 50%;
            position: absolute;
            transform: translate(-50%,-50%);
            box-shadow: 5px 5px 10px rgba(0,0,0,0.5);
            padding: 70px 30px;
        }
        .login-box h2{
            margin: 0;
            padding: 0 0 20px;
            font-size: 22px;
            text-align: center;
        }
        .user-box{
            position: relative;
        }
        .user-box input{
            width: 100%;
            padding: 10px 0;
            font-size: 16px;
            color: #fff;
            margin-bottom: 30px;
            border: none;
            border-bottom: 1px solid #fff;
            outline: none;
            background: transparent;
        }
        .user-box label{
            position: absolute;
            top: 0;
            left: 0;
            padding: 10px 0;
            font-size: 16px;
            color: #fff;
            pointer-events: none;
            transition: 0.5s;
        }
        .user-box input:focus ~ label,
        .user-box input:valid ~ label{
            top: -20px;
            left: 0;
            color: #03a9f4;
            font-size: 12px;
        }
        .user-box input:focus,
        .user-box input:valid{
            border-bottom: 2px solid #03a9f4;
        }
        input[type="submit"]{
            background: transparent;
            border: none;
            outline: none;
            color: #fff;
            background: #03a9f4;
            padding: 10px 20px;
            cursor: pointer;
            border-radius: 5px;
            margin-bottom: 10px;
            position: absolute;
            right: 40px;
            left: 40px;
            bottom: 18%;
        }

        </style>
    </head>
<body style=background:url("https://images.alphacoders.com/108/1081303.png"); >
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


</body>
</html>