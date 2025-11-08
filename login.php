<?php
    session_start();
    if (isset($_SESSION['username'])) {
        header('Location: admin/');
        exit;
    }
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="asset/style/login.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="asset/style/bootstrap-5.3.3-dist/css/bootstrap.min.css">
    <title>Ganyeum | Login Admin</title>

    <!-- Favicon -->
    <link href="../asset/img/Logo.ico" rel="icon">
</head>

<body>
    <div class="container d-flex justify-content-center align-items-center min-vh-100">
        <div class="row border rounded-5 p-3 bg-white shadow box-area">
            <div class="col-md-6 rounded-4 d-flex justify-content-center align-items-center flex-column left-box"
                style="background: #2D3468;">
                <div class="featured-image mb-3">
                    <img src="asset/img/Logo.png" class="img-fluid" style="width: 250px;">
                </div>
                <p class="text-white fs-2" style="font-family: 'Courier New', Courier, monospace; font-weight: 600;">Ganyeum</p>
                <small class="text-white text-wrap text-center"
                    style="width: 17rem;font-family: 'Courier New', Courier, monospace;">Happy Tummy Without Worry</small>
            </div>
            <div class="col-md-6 right-box">
                <div class="row align-items-center px-3">
                    <form action="<?php if (isset($_GET['gagal'])) { echo 'config/proses_login.php?gagal=' .$_GET['gagal']; } else { echo 'config/proses_login.php'; } ?>" method="POST">
                        <?php
                            if (isset($_GET['gagal'])) { ?>
                                <div class="header-text text-danger">
                                    <p>Username atau Password salah</p>
                                </div>
                        <?php    
                            }
                        ?>
                        <div class="header-text mb-4">
                            <h2>Halo</h2>
                            <p>Kami senang Anda kembali.</p>
                        </div>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control form-control-lg bg-light fs-6" id="user" name="username" placeholder="Username">
                        </div>
                        <div class="input-group mb-5">
                            <input type="password" class="form-control form-control-lg bg-light fs-6" name="password" placeholder="Password">
                        </div>
                        <!-- <div class="input-group mb-5 d-flex justify-content-between">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="formCheck">
                                <label for="formCheck" class="form-check-label text-secondary"><small>Remember Me</small></label>
                            </div>
                            <div class="forgot">
                                <small><a href="#">Forgot Password?</a></small>
                            </div>
                        </div> -->
                        <div class="input-group mb-3">
                            <button class="btn btn-lg w-100 fs-6 text-white" type="submit" style="background-color: #2D3468;">Login</button>
                        </div>
                        <!-- <div class="input-group mb-3">
                            <button class="btn btn-lg btn-light w-100 fs-6"><img src="asset/img/google.png" style="width:20px"
                                    class="me-2"><small>Sign In with Google</small></button>
                        </div>
                        <div class="row">
                            <small>Don't have account? <a href="#">Sign Up</a></small>
                        </div> -->
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>