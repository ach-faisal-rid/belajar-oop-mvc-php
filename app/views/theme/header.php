<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, 
    initial-scale=1.0">
    <title>Halaman <?= $data['judul']; ?></title>
    <link rel="icon" type="image/png" href="assets/img/icon/icon_32.png">
    <link rel="stylesheet" href="<?= BASEURL; ?>/assets/css/bootstrap.css">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #596FB7;">
    <div class="container">
        <a class="navbar-brand" href="<?= BASEURL; ?>">PHP-MVC</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="<?= BASEURL; ?>">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= BASEURL; ?>Siswa">Siswa</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= BASEURL; ?>About">About</a>
                </li>
            </ul>
        </div>
    </div>
  
</nav>