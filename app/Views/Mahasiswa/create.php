<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-10">
            <h2 class="mb-3">Tambah Data Mahasiswa</h2>
            <form action="/mahasiswa/save" method="post">
                <div class="row mb-3">
                    <label for="nama_mahasiswa" class="col-sm-2 col-form-label">Nama Mahasiswa</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="nama_mahasiswa" autofocus>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="nim" class="col-sm-2 col-form-label">NIM</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" name="nim">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="prodi" class="col-sm-2 col-form-label">Prodi</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="prodi">
                    </div>
                </div>
                <a href="/mahasiswa" class="btn btn-secondary">Kembali</a>
                <button type="submit" class="btn btn-success">Simpan</button>
            </form>
        </div>
    </div>
</div>
<?= $this->endsection(); ?>