<?php
if (isset($_GET["include"])) {
    $include = $_GET["include"];
    if ($include == "konfirmasi-login") {
        include("include/konfirmasiLogin.php");
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body class="hold-transition login-page">
    <div class="login-box">
        <div class="login-logo">
            <a href="#"><b>Admin</b>Katalog</a>
        </div>
        <!-- /.login-logo -->
        <div class="card">
            <div class="card-body login-card-body">
                <p class="login-box-msg">Sign in to start your session</p>

                <?php
                if (isset($_GET['pesan'])) {
                    if ($_GET['pesan'] == "userKosong") {
                        echo '<span class="text-danger">Maaf Email Tidak Boleh Kosong</span>';
                    } elseif ($_GET['pesan'] == "passKosong") {
                        echo '<span class="text-danger">Maaf Password Tidak Boleh Kosong</span>';
                    } elseif ($_GET['pesan'] == "userpassSalah") {
                        echo '<span class="text-danger">Maaf Email dan Password Anda Salah</span>';
                    }
                }
                ?>

                <form action="index.php?include=loginKonfirmasi" method="POST">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Email" name="email">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" placeholder="Password" name="password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-8">
                        </div>
                        <!-- /.col -->
                        <div class="col-4">
                            <button type="submit" name="login" class="btn btn-primary btn-block">Sign In</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>
                <!-- /.social-auth-links -->
            </div>
            <!-- /.login-card-body -->
        </div>
    </div>
    <!-- /.login-box -->
    <?php include("include/script.php") ?>
</body>

</html>