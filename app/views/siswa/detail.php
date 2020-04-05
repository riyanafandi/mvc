<div class="container mt-4">
    <div class="card" style="width:18rem;">
        <div class="card-body text-center">
            <h5 class="card-title"><?= $data["siswa"]["nama"]; ?></h5>
            <h6 class="card-subtitle mb-2 text-muted"><?= $data["siswa"]["kelas"]; ?></h6>
            <p class="card-text"><?= $data["siswa"]["email"]; ?></p>
            <p class="card-text"><?= $data["siswa"]["jurusan"]; ?></p>
            <p class="card-text"><?= $data["siswa"]["alamat"]; ?></p>
            <a href="<?= BASEURL; ?>siswa" class="card-link">Kembali</a>
        </div>
    </div>
</div>