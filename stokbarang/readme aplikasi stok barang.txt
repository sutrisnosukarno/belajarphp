1. Buat folder dengan nama stokbarang
2. Download template sbadmin dan di ekstrak ke folder stokbarang
3. Buat database dengan nama stokbarang dengan struktur sbb:

- login: iduser, email, password
- stok: idbarang, namabarang, deskripsi, stok
- masuk: idmasuk, idbarang, tanggal, keterangan
- keluar: idkeluar, idbarang, tanggal, penerima

4. rubah file index dan login ke php
5. buat file function.php

<?php
    //membuat koneksi ke database
    $conn = mysqli_connect("localhost","root","","stokbarang");

    if($conn) {
        echo 'berhasil';
    }

?>

6. tambahkan function.php di file index dan login

<?php
    require 'function.php';
?>

7. kalau sudah berhasil konek, ifnya di function.php di hapus saja

<?php
    //membuat koneksi ke database
    $conn = mysqli_connect("localhost","root","","stokbarang");
?>

8. Sintak login.php

<?php
    require 'function.php';
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Login - SB Admin</title>
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Login</h3></div>
                                    <div class="card-body">
                                        <form>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputEmail" type="email" placeholder="name@example.com" />
                                                <label for="inputEmail">Email address</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputPassword" type="password" placeholder="Password" />
                                                <label for="inputPassword">Password</label>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                                <a class="btn btn-primary" href="index.html">Login</a>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <div id="layoutAuthentication_footer">
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; rumah-belajar.com 2024</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>


--------------
10. tambahkan form method post di login.php

<form method="post">

11. 
                                        <form method="post">

