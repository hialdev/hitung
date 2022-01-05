<?php 

class Home extends Controller {
    public function index()
    {
        $data['judul'] = 'Hitung - Tempat kita belajar matematika bersama!';
        $data['belajar'] = $this->model('BelajarModel')->getOrderByLimit('created_at',6);
        $this->view('templates/header', $data);
        $this->view('home/index', $data);
        $this->view('templates/footer');
    }
}