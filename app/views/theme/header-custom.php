<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Halaman <?= $data['judul']; ?></title>
    <link rel="stylesheet" href="<?= BASEURL; ?>/assets/css/bootstrap.css">
    <link rel="stylesheet" href="<?= BASEURL; ?>/assets/css/style.css">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #596FB7;">
  <div class="container">
      <a class="navbar-brand" href="<?= BASEURL; ?>">PHP MVC</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-item nav-link active" href="<?= BASEURL; ?>">Home <span class="sr-only">(current)</span></a>
          <a class="nav-item nav-link" href="<?= BASEURL; ?>siswa">siswa</a>
          <a class="nav-item nav-link" href="<?= BASEURL; ?>book">bookshelf</a>
          <a class="nav-item nav-link" href="<?= BASEURL; ?>about">About</a>
        </div>
      </div>
  </div>
</nav>