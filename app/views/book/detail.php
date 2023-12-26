<div class="container mt-5">
<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title"><?= $data['book']['title'] ?></h5>
    <h6 class="card-subtitle mb-2 text-muted"><?= $data['book']['year'] ?></h6>
    <p class="card-text"><?= $data['book']['author'] ?></p>
    <p class="card-text"><?= $data['book']['isComplete'] ?></p>
    <a href="<?= BASEURL; ?>/Book" class="card-link btn btn-warning">back</a>
  </div>
</div>
</div>