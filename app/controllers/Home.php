<?php 

class Home  extends Controller
{
    public function index()
    {
        $data["nama"] = $this->model('User_model')->getNama();
        $data["judul"] = "home";
        $this->view('templates/header',$data);
        $this->view('home/index', $data);
        $this->view('templates/footer');
    }
}
