$(function () {

    $('.tombolTambah').on('click', function () {
        $('#judulModal').html('Tambah Data Siswa');
        $('.modal-footer button[type=submit]').html('Tambah Data');
        $('.modal-content form').attr('action', 'http://localhost/mvc/public/siswa/tambah');
    });

    $('.tampilUbah').on('click', function () {

        $('#judulModal').html('Ubah Data Siswa');
        $('.modal-footer button[type=submit]').html('Ubah Data');
        $('.modal-content form').attr('action', 'http://localhost/mvc/public/siswa/ubah');

        const id = $(this).data('id');

        $.ajax({
            url: 'http://localhost/mvc/public/siswa/getubah',
            data: { id: id },
            method: 'post',
            dataType: 'json',
            success: function (data) {
                $('#nama').val(data.nama);
                $('#kelas').val(data.kelas);
                $('#jurusan').val(data.jurusan);
                $('#alamat').html(data.alamat);
                $('#email').val(data.email);
                $('#id').val(data.id);
                // console.log(data);
            }
        });
    });
});