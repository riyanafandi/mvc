<div class="container">
    <div class="h1">Daftar Siswa</div>
    <ul class="list-group">
    <?php foreach($data["siswa"] as $siswa): ?>
        <li class="list-group-item d-flex align-item-center justify-content-between "><?= $siswa["nama"]; ?>
        <a href="<?= BASEURL ?>siswa/detail/<?= $siswa["id"]; ?>" class="btn btn-sm btn-info">Detail</a>
        </li>
    <?php endforeach; ?>
    </ul>
</div>