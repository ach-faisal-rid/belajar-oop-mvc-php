<div class="container mt-5">
    <div class="row">
        <div class="col-6">
            <h3>Daftar Siswa</h3>

            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">no</th>
                        <th scope="col">nama</th>
                        <th scope="col">nisn</th>
                        <th scope="col">email</th>
                        <th scope="col">jurusan</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 0; ?>
                    <?php foreach ($data['siswa'] as $siswa) : ?>
                    <tr>
                        <th scope="row"><?= $i + 1; ?></th>
                        <td><?= $siswa['nama']; ?></td>
                        <td><?= $siswa['nisn']; ?></td>
                        <td><?= $siswa['email']; ?></td>
                        <td><?= $siswa['jurusan']; ?></td>
                    </tr>
                    <?php $i++; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>