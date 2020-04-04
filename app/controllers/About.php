<?php 

class About extends Controller
{
    public function index(){
        $data["nama"] = "Riyan Afandi";
        $data["status"] = "Siswa";
        $data["judul"] = "about";
        $this->view('templates/header', $data);
        $this->view('about/index', $data);
        $this->view('templates/footer');
    }
    public function page(){
        $data["judul"] = "pages";
        $this->view('templates/header', $data);
        $this->view('about/page');
        $this->view('templates/footer');
    }
}
