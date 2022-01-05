<?php 

class Mentor extends Controller {
    public function index()
    {
        $data['judul'] = 'Belajar dibawah bimbingan ahli matematika!';
        $data['expert'] = $this->model('ExpertModel')->getAll();
        $data['user'] = $this->model('UserModel')->getBy('role','expert');
        $this->view('templates/session');
        $this->view('templates/header', $data);
        $this->view('mentor/index', $data);
        $this->view('templates/footer');
    }
}