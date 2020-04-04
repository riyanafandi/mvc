<?php 

class About extends Controller
{
    public function index($nama = "riyan afandi", $job = "students"){
        $data["judul"] = "about";
        $this->view('templates/header', $data);
        $this->view('about/index');
        $this->view('templates/footer');
    }
    public function page(){
        $data["judul"] = "pages";
        $this->view('templates/header', $data);
        $this->view('about/page');
        $this->view('templates/footer');
    }
}
