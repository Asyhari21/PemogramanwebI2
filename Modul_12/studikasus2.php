<?php
    if (isset($_POST['log-out'])) {
        session_destroy();
        header("location: studikasus.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>studikasus2</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
    <script>
        $(document).ready(function() {
        $('#data').DataTable();
        });
        function confirmLogout() {
            return confirm("Apakah anda ingin logout?");
        }
    </script>
    <style>
        .teks{
            text-align: center;
        }
    </style>


</head>
<body style=background:url("https://images3.alphacoders.com/109/109509.jpg");background-repeat: no-repeat;background-size: cover;>
    <script type="text/javascript">
        var y = window.prompt ("Silahkan Masukkan nama anda")
        window.alert("Hai " + y + " Salam kenal ^^" )
    </script>   

    <div class="d-flex justify-content-start align-items-center p-2 bd-highlight">
        <form action="" method="post" onsubmit="return confirmLogout()">
            <button class="btn btn-danger" type="submit" name="log-out">
                Logout
            </button>
        </form>
    </div>

    <div class="teks">
    <a href="https://www.youtube.com/"><img src="https://1.bp.blogspot.com/-_rcz4p0xJ8I/Xdqh8ccOJGI/AAAAAAAAFdk/79Hdmw3IbLYcoyz2yKL_M1sy0-layuzMACLcBGAsYHQ/s1600/a1.png"width=250px></a>
        
    <a href="https://m.meownime.ai/" class="btn btn-info">Klik Disini jika kamu anak Wibu</a>
    </div>
</body>
</html>