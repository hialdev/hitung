<?php 

class Learn extends Controller {
    public function index()
    {
        $data['judul'] = 'List Materi Belajar';
        $data['belajar'] = $this->model('BelajarModel')->getAll();
        $this->view('templates/user/header', $data);
        $this->view('crud/learn/list', $data);
        $this->view('templates/user/footer');
    }

    public function create()
    {
        $data['judul'] = 'Add Belajar';
        $this->view('templates/user/header', $data);
        $this->view('crud/learn/add', $data);
        $this->view('templates/user/footer');
    }

    public function created()
    {
        $data = $_POST;
        $img = $_FILES['thumbnail'];
        if (isset($img)) {
            $data['slug'] = $this->slugify($data['title']);
            $folder = "img/learn/";
            $name = $img['name'];
            // Path upload
            $filesave = $folder . $name;
            if (mkdir($folder)) {
                move_uploaded_file($img['tmp_name'], $filesave);
            }else{
                move_uploaded_file($img['tmp_name'], $filesave);
            }
            $data['thumbnail'] = $filesave;
        }
        if($this->model('BelajarModel')->add($data)){
            header('Location: ' . BASEURL . '/learn');
        }else{
            header('Location: ' . BASEURL . '/learn/create');
        }
    }

    public function edit($id)
    {
        $data['judul'] = 'List Belajar';
        $data['belajar'] = $this->model('BelajarModel')->getByFirst('id',$id);
        $this->view('templates/user/header', $data);
        $this->view('crud/learn/edit', $data);
        $this->view('templates/user/footer');
    }

    public function update($id)
    {
        $data = $_POST;
        $data['id'] = $id;
        $data['slug'] = $this->slugify($data['title']);
        $learn = $this->model('BelajarModel')->getByFirst('id',$id);

        if (isset($img)){
            $img = $_FILES['thumbnail'];
            $folder = "img/learn/";
            $name = $img['name'];
            // Path upload
            $filesave = $folder . $name;
            $data['thumbnail'] = $filesave;
            
            if (mkdir($folder)) {
                move_uploaded_file($img['tmp_name'], $filesave);
            }else{
                move_uploaded_file($img['tmp_name'], $filesave);
            }
        }
        $data['oldthumbnail'] = $learn['thumbnail'];

        if($this->model('BelajarModel')->update($data)){
            header('Location: ' . BASEURL . '/learn');
        }else{
            header('Location: ' . BASEURL . '/learn/edit/'.$id);
        }
    }

    public function destroy($id)
    {
        if($this->model('BelajarModel')->delete($id)){
            header('Location: ' . BASEURL . '/learn');
        }else{
            header('Location: ' . BASEURL . '/learn');
        }
    }
}