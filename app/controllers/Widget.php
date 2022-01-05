<?php 

class Widget extends Controller {
    public function index()
    {
        $data['judul'] = 'List Widget';
        $data['widget'] = $this->model('WidgetModel')->getAll();
        $this->view('templates/user/header', $data);
        $this->view('crud/widget/list', $data);
        $this->view('templates/user/footer');
    }

    public function create()
    {
        $data['judul'] = 'Add Widget';
        $this->view('templates/user/header', $data);
        $this->view('crud/widget/add', $data);
        $this->view('templates/user/footer');
    }

    public function created()
    {
        $data = $_POST;
        if($this->model('WidgetModel')->add($data)){
            header('Location: ' . BASEURL . '/widget');
        }else{
            header('Location: ' . BASEURL . '/widget/create');
        }
    }

    public function edit($id)
    {
        $data['judul'] = 'List Widget';
        $data['widget'] = $this->model('WidgetModel')->getByFirst('id',$id);
        $this->view('templates/user/header', $data);
        $this->view('crud/widget/edit', $data);
        $this->view('templates/user/footer');
    }

    public function update($id)
    {
        $data = $_POST;
        $data['id'] = $id;
        if($this->model('WidgetModel')->update($data)){
            header('Location: ' . BASEURL . '/widget');
        }else{
            header('Location: ' . BASEURL . '/widget/edit/'.$id);
        }
    }

    public function destroy($id)
    {
        if($this->model('WidgetModel')->delete($id)){
            header('Location: ' . BASEURL . '/widget');
        }else{
            header('Location: ' . BASEURL . '/widget');
        }
    }
}