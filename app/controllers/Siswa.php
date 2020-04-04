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
}






?>