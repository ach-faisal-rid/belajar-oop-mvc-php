<div class="container mt-5">
    <div class="row">
        <div class="col-6">

            <div class="row mb-3">
                <div class="col-lg-6">
                    <button type="button" class="btn btn-primary btnTambahDataBook" data-toggle="modal" data-target="#formModal">
                    Tambah Book
                    </button>
                </div>
            </div>

            <h3>Daftar Book</h3>
            <ul class="list-group">
                <?php foreach ($data['book'] as $book) : ?>
                    <li class="list-group-item">
                        <?= $book['title'] ?>
                        <a href="#" class="badge badge-danger float-right ml-2" onclick="return confirm('yakin ?');">delete</a>
                        <a href="<?= BASEURL; ?>/Book/ubah/<?= $book['id']; ?>" class="badge badge-warning float-right ml-2 btnUbahData" data-toggle="modal" data-target="#formModal" data-id="#">ubah</a>
                        <a href="<?= BASEURL; ?>/Book/detail/<?= $book['id']; ?>" class="badge badge-info float-right ml-2">detail</a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="formModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="formModalLabel">Tambah data Book</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?= BASEURL; ?>book/tambah" method="post">
        <input type="hidden" name="id" id="id">
            <div class="form-group">
                <label for="nama">title</label>
                <input type="text" class="form-control" id="title" name="title" autocomplete="off" required>
            </div>
            <div class="form-group">
                <label for="nisn">year</label>
                <input type="number" class="form-control" id="year" name="year" autocomplete="off" required>
            </div>
            <div class="form-group">
                <label for="author">author</label>
                <input type="text" class="form-control" id="author" name="author" autocomplete="off" required>
            </div>
            <div class="form-group">
                <label for="isComplete">isComplete</label>
                <select class="form-control" id="isComplete" name="isComplete">
                    <option value="1">1</option>
                    <option value="0">0</option>
                </select>
            </div>
        </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-success">Save</button>
            </div>
        </form>
    </div>
  </div>
</div>