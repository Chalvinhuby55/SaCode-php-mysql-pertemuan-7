<?php
if ($_POST !=null)
{
    $nama = $_POST ['nama'];
    $email = $_POST ['email'];
    $nomor_wa = $_POST ['nomor_wa'];
} if ($_GET !=null)
{
    $nama = $_GET['nama'];
    $email = $_GET['email'];
    $nomor_wa = $_GET ['nomor_wa'];
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
    <header class="bg-dark text-warning"> 
        <p class="py-3 text-uppercase fw-bolder">Isi data Siswa</p>
    </header>

    <!-- Content -->
    <section>
        <div class="container">
            <div class="row">
                <div class="co-6">
                 <h1>Sudah terdaftar</h1>
                 <p>Nama <?=$nama?></p>
                 <p>Email <?=$email?></p>
                 <p>Nomor_Wa <?=$nomor_wa?></p>
                

                </div>
            </div>

        </div>
    </section>

  

    
</body>
<!-- Link JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</html>