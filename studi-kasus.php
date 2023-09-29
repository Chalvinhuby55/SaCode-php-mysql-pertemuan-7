<?php

if ($_POST !=null)
{
    $email = $_POST ['email'];
    $password = $_POST ['password'];
    if($email == "cjemihuby@gmail.com" && $password == "87654321")
{
    echo 
    "
    <script>
    alert('Berhasil login')
    window.location.href = 'berhasil-login.php';
    </script>
    ";
}else
{
    echo 
    "
    <script>
    alert('Gagal login')
    alert ('Kata sandi atau password salah')
    </script>
    ";
}
}



?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Link Boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>

    <!-- Header -->
    <header class="bg-dark text-warning text-center"> 
        <p class="py-3 text-uppercase fw-bolder"> Halaman LogIn</p>
    </header>

    <!-- Content -->
    <section>
        <div class="container">
            <div class="row d-flex justify content-center">
                <div class="co-6 shadow mt-5 p-5 ">
                 <form action="" method="post">
                <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" class="form-control" id="email" required>
                </div>
                <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" id="password" required>
                </div>
                <button class="btn btn-dark text-warning">Login</button>
              </form>

                </div>
            </div>

        </div>
    </section>
</body>
<!-- Link JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</html>