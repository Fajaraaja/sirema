<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
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
                                <a href="" class="btn btn-warning">Edit</a>
                                <a href="" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?= $this->endsection(); ?>