<div class="container">
    <div class="row">
        <div class="col-lg-6">
            <?php Flasher::flash(); ?>
        </div>
    </div>
    <div class="h1">Daftar Siswa</div>
    <button class="btn my-3 btn-primary tombolTambah" type="button" data-toggle="modal" data-target="#modal">Tambah Data Siswa</button>
    <ul class="list-group">
    <?php foreach($data["siswa"] as $siswa): ?>
        <li class="list-group-item"><?= $siswa["nama"]; ?>

        <a href="<?= BASEURL ?>siswa/hapus/<?= $siswa["id"]; ?>" class="btn btn-sm btn-danger ml-2 float-right" onclick="return confirm('yakin ingin menghapus');">Hapus</a>
        <a href="<?= BASEURL ?>siswa/ubah/<?= $siswa["id"]; ?>" class="btn btn-sm btn-warning ml-2 float-right tampilUbah"  data-toggle="modal" data-target="#modal" data-id="<?= $siswa["id"]; ?>">Ubah</a>
        <a href="<?= BASEURL ?>siswa/detail/<?= $siswa["id"]; ?>" class="btn btn-sm btn-info float-right ml-2">Detail</a>
        </li>
    <?php endforeach; ?>
    </ul>
</div>




<div class="modal fade" id="modal" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="judulModal">Judul</h5>
                <button class="close" data-dismiss="modal">
                    <span>&times;</span>
                </button>
            </div>
            <form action="<?= BASEURL; ?>siswa/tambah" method="post">
            <input type="hidden" name="id" id="id">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input id="nama" class="form-control" type="text" name="nama" placeholder="Masukan Nama">
                    </div>
                    <div class="form-group">
                        <label for="kelas">Kelas</label>
                        <input id="kelas" class="form-control" type="text" name="kelas" placeholder="Masukan kelas">
                    </div>
                    <div class="form-group">
                        <label for="jurusan">Jurusan</label>
                        <select id="jurusan" name="jurusan" id="" class="form-control">
                            <option value="Teknik komputer dan Jaringan">Teknik komputer dan Jaringan</option>
                            <option value="Teknik Sepeda Motor">Teknik Sepeda Motor</option>
                            <option value="PerBankan Syaiah">PerBankan Syaiah</option>
                            <option value="Tata Boga">Tata Boga</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input id="email" class="form-control" type="email" name="email" placeholder="Masukan email">
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <textarea id="alamat" class="form-control" type="text" name="alamat" placeholder="Masukan alamat"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button data-dismiss="modal" class="btn btn-secondary">Close</button>
                    <button type="submit" class="btn btn-primary">Tambah Data</button>
                </div>
            </form>
        </div>
    </div>
</div>