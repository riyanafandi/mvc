<div class="container">
    <div class="h1">Daftar Siswa</div>
    <?php foreach($data["siswa"] as $siswa): ?>
    <ul>
        <li><?= $siswa["nama"]; ?></li>
        <li><?= $siswa["kelas"]; ?></li>
        <li><?= $siswa["jurusan"]; ?></li>
        <li><?= $siswa["alamat"]; ?></li>
        <li><?= $siswa["email"]; ?></li>
    </ul>
    <?php endforeach; ?>
</div>