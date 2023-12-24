<div class="container mt-5">
    
    <div class="row">
        <div class="col-lg-6">
            <?php Flasher::flash();  ?>
        </div>
    </div>

    <div class="row">
        <div class="col-6">

            <div class="row mb-3">
                <div class="col-lg-6">
                    <button type="button" class="btn btn-primary btnTambahData" data-toggle="modal" data-target="#formModal">
                    Tambah Siswa
                    </button>
                </div>
            </div>

            <h3>Daftar Siswa</h3>
            <ul class="list-group">
                <?php foreach ($data['siswa'] as $siswa) : ?>
                    <li class="list-group-item">
                        <?= $siswa['nama'] ?>
                        <a href="<?= BASEURL; ?>/Siswa/hapus/<?= $siswa['id']; ?>" class="badge badge-danger float-right ml-2" onclick="return confirm('yakin ?');">delete</a>
                        <a href="<?= BASEURL; ?>/Siswa/ubah/<?= $siswa['id']; ?>" class="badge badge-warning float-right ml-2 btnUbahData" data-toggle="modal" data-target="#formModal" data-id="<?= $siswa['id']; ?>">ubah</a>
                        <a href="<?= BASEURL; ?>/Siswa/detail/<?= $siswa['id']; ?>" class="badge badge-info float-right ml-2">detail</a>
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
        <h5 class="modal-title" id="formModalLabel">Tambah data Siswa</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?= BASEURL; ?>siswa/tambah" method="post">
        <input type="hidden" name="id" id="id">
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" autocomplete="off" required>
            </div>
            <div class="form-group">
                <label for="nisn">NISN</label>
                <input type="number" class="form-control" id="nisn" name="nisn" autocomplete="off" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="email@example.com">
            </div>
            <div class="form-group">
                <label for="jurusan">Jurusan</label>
                <select class="form-control" id="jurusan" name="jurusan">
                    <option value="rekayasa perangkat lunak">Rekayasa Perangkat Lunak</option>
                    <option value="multimedia">Multimedia</option>
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