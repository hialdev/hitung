<?php 

class Soal extends Controller {
    public function index()
    {
        $data['judul'] = 'Quiz Soal Manager';
        $data['desc'] = 'Deskripsi';
        $data['soal'] = $this->model('SoalModel')->getAll();
        $this->view('templates/header', $data);
        $this->view('crud/soal/list', $data);
        $this->view('templates/footer');
    }

    public function create()
    {
        $data['judul'] = 'Tambah Soal';
        $this->view('templates/header', $data);
        $this->view('crud/soal/add', $data);
        $this->view('templates/footer');
    }

    public function created()
    {
        $data = $_POST;
        if($this->model('SoalModel')->add($data)){
            header('Location: ' . BASEURL . '/soal');
        }else{
            header('Location: ' . BASEURL . '/soal/create');
        }
    }

    public function edit($id)
    {
        $data['judul'] = 'List soal';
        $data['soal'] = $this->model('SoalModel')->getByFirst('id',$id);
        $this->view('templates/user/header', $data);
        $this->view('crud/soal/edit', $data);
        $this->view('templates/user/footer');
    }

    public function update($id)
    {
        $data = $_POST;
        $data['id'] = $id;
        if($this->model('SoalModel')->update($data)){
            header('Location: ' . BASEURL . '/soal');
        }else{
            header('Location: ' . BASEURL . '/soal/edit/'.$id);
        }
    }

    public function destroy($id)
    {
        if($this->model('SoalModel')->delete($id)){
            header('Location: ' . BASEURL . '/soal');
        }else{
            header('Location: ' . BASEURL . '/soal');
        }
    }
}