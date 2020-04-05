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
}






?>