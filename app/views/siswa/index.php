<div class="container">
    <div class="h1">Daftar Siswa</div>
    <button class="btn my-3 btn-primary" type="button" data-toggle="modal" data-target="#modal">Tambah Data Siswa</button>
    <ul class="list-group">
    <?php foreach($data["siswa"] as $siswa): ?>
        <li class="list-group-item d-flex align-item-center justify-content-between "><?= $siswa["nama"]; ?>
        <a href="<?= BASEURL ?>siswa/detail/<?= $siswa["id"]; ?>" class="btn btn-sm btn-info">Detail</a>
        </li>
    <?php endforeach; ?>
    </ul>
</div>




<div class="modal fade" id="modal" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Judul</h5>
                <button class="close" data-dismiss="modal">
                    <span>&times;</span>
                </button>
            </div>
            <form action="<?= BASEURL; ?>siswa/tambah" method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="">Nama</label>
                        <input class="form-control" type="text" name="nama" placeholder="Masukan Nama">
                    </div>
                    <div class="form-group">
                        <label for="">Kelas</label>
                        <input class="form-control" type="text" name="kelas" placeholder="Masukan kelas">
                    </div>
                    <div class="form-group">
                        <label for="">Jurusan</label>
                        <select name="jurusan" id="" class="form-control">
                            <option value="Teknik komputer dan Jaringan">Teknik komputer dan Jaringan</option>
                            <option value="Teknik Sepeda Motor">Teknik Sepeda Motor</option>
                            <option value="PerBankan Syaiah">PerBankan Syaiah</option>
                            <option value="Tata Boga">Tata Boga</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Email</label>
                        <input class="form-control" type="email" name="email" placeholder="Masukan email">
                    </div>
                    <div class="form-group">
                        <label for="">Alamat</label>
                        <textarea class="form-control" type="text" name="alamat" placeholder="Masukan alamat"></textarea>
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