<?php 
class Siswa extends Controller
{
    public function index(){
        $data["judul"] = "siswa";
        $data["siswa"] = $this->model('Siswa_model')->getSiswa();
        $this->view('templates/header', $data);
        $this->view('siswa/index', $data);
        $this->view('templates/footer');
    }
    public function detail($id){
        $data["judul"] = "detail siswa";
        $data["siswa"] = $this->model('Siswa_model')->getDetailSiswa($id);
        $this->view('templates/header', $data);
        $this->view('siswa/detail', $data);
        $this->view('templates/footer');
    }


    public function tambah()
    {
        if( $this->model('Siswa_model')->tambahDataSiswa($_POST) > 0 )
        {
            Flasher::setFlash('Berhasil', 'Ditambahkan', 'success');
            header('location: ' . BASEURL . 'siswa');
            exit;
        }else{
            Flasher::setFlash('Gagal', 'Ditambahkan', 'danger');
        }
    }
    public function hapus($id)
    {
        if( $this->model('Siswa_model')->hapusDataSiswa($id) > 0 )
        {
            Flasher::setFlash('Berhasil', 'Dihapus', 'success');
            header('location: ' . BASEURL . 'siswa');
            exit;
        }else{
            Flasher::setFlash('Gagal', 'Dihapus', 'danger');
        }
    }

}






?>