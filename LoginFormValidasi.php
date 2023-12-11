<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <style>
        /* Menambahkan CSS khusus untuk halaman ini */
        .card-header {
            background-color: white; /* Mengubah warna latar belakang header box menjadi putih */
            font-size: 1.5em; /* Memperbesar ukuran teks header box */
            text-align: center; /* Pusatkan teks header box */
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Form Login</div> <!-- Mengganti teks header box menjadi "Form Login" -->

                    <div class="card-body">
                        <form method="POST" action="">
                            <div class="form-group row">
                                <label for="username" class="col-md-4 col-form-label text-md-right">Username</label>

                                <div class="col-md-6">
                                    <input id="username" type="text" class="form-control" name="username" required autocomplete="username" autofocus>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control" name="password" required autocomplete="current-password">
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        Login
                                    </button>
                                </div>
                            </div>
                        </form>

                        <?php
                        // Proses login jika formulir dikirimkan
                        if ($_SERVER["REQUEST_METHOD"] == "POST") {
                            $username = trim($_POST["username"]);
                            $password = trim($_POST["password"]);

                            // Melakukan validasi login
                            if (validasiLogin($username, $password)) {
                                echo "<div class='alert alert-success mt-3' role='alert'>Login sukses, selamat datang " . $username . "!</div>";
                            } else {
                                echo "<div class='alert alert-danger mt-3' role='alert'>Login gagal, periksa kembali username dan password Anda.</div>";
                            }
                        }

                        // Fungsi validasi login
                        function validasiLogin($username, $password) {
                            // Ganti logika validasi sesuai kebutuhan Anda
                            // Misalnya, Anda dapat memeriksa dengan database atau sumber otentikasi lainnya
                            // Berikut adalah contoh sederhana
                            if ($username == "admin" && $password == "123456") {
                                return true;
                            } else {
                                return false;
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>

</html>
