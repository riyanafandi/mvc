<div class="container mt-4">
    <h1>Daftar Guru</h1>
    <table class="table table-bordered table-hover">
        <thead class="thead-light">
            <tr>
                <th>Nama</th>
                <th>Jenis Kelamin</th>
                <th>Agama</th>
                <th>Umur</th>
                <th>Jabatan</th>
                <th>Alamat</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach($data["guru"] as $guru) :?>
            <tr>
                <td><?= $guru["nama"]; ?></td>
                <td><?= $guru["jenis_kelamin"]; ?></td>
                <td><?= $guru["agama"]; ?></td>
                <td><?= $guru["umur"]; ?></td>
                <td><?= $guru["jabatan"]; ?></td>
                <td><?= $guru["alamat"]; ?></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>