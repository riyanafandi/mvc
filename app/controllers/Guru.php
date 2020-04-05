<?php 

class Guru extends Controller 
{
    public function index(){

        $data["judul"] = "guru";
        $data["guru"] = $this->model('Guru_model')->namaGuru();
        $this->view('templates/header', $data);
        $this->view('guru/index', $data);
        $this->view('templates/footer');
    }
}


?>