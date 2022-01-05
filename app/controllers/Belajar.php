<?php 

class Belajar extends Controller {
    public function index()
    {
        $data['judul'] = 'Ayo Belajar';
        $data['belajar'] = $this->model('BelajarModel')->getAll();
        $this->view('templates/header', $data);
        $this->view('belajar/index', $data);
        $this->view('templates/footer');
    }
    public function al($slug)
    {
        $data['belajar'] = $this->model('BelajarModel')->getByFirst('slug',$slug);
        $data['judul'] = "Belajar - ".$data['belajar']['title'];
        $this->view('templates/session');
        $this->view('templates/header', $data);
        $this->view('belajar/show', $data);
        $this->view('templates/footer');
    }
}