<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <a href="/mahasiswa/create" class="btn btn-success mt-3">Tambah Mahasiswa</a>
            <h2 class="mb-3">Daftar Mahasiswa</h2>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama Mahasiswa</th>
                        <th scope="col">NIM</th>
                        <th scope="col">prodi</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($mahasiswa as $a) : ?>
                        <tr>
                            <th scope="row"><?= $i++; ?></th>
                            <td><?= $a['nama_mahasiswa']; ?></td>
                            <td><?= $a['nim']; ?></td>
                            <td><?= $a['prodi']; ?></td>
                            <td>
                                <a href="/mahasiswa/edit/<?= $a['id']; ?>" class="btn btn-warning">Edit</a>
                                <a href="/mahasiswa/delete/<?= $a['id']; ?>" class="btn btn-danger" onclick="return confirm('Apakah Yakin Ingin Hapus?')">Delete</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?= $this->endsection(); ?>