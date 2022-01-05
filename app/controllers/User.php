<?php 

class User extends Controller {

    public function index()
    {
        $data['judul'] = 'User Page';
        $data['widget'] = $this->model('WidgetModel')->getBy('role','user');
        $this->view('templates/validate');
        $this->view('templates/user/header', $data);
        $this->view('user/user', $data);
        $this->view('templates/user/footer');
    }
    public function admin()
    {
        $data['judul'] = 'Admin Page';
        $data['widget'] = $this->model('WidgetModel')->getBy('role','admin');
        $this->view('templates/validate');
        $this->view('templates/user/header', $data);
        $this->view('user/admin', $data);
        $this->view('templates/user/footer');
    }
    public function expert()
    {
        header('Location: ' . BASEURL . '/user/profile');
    }
    public function profile()
    {
        $data['judul'] = 'User Profile';
        $data['user'] = $this->model('UserModel')->getByFirst('username',$_SESSION['username']);
        if ($data['user']['role'] == 'expert') {
            $data['expert'] = $this->model('ExpertModel')->getByFirst('username',$_SESSION['username']);
        }
        $this->view('templates/user/header', $data);
        $this->view('user/profile', $data);
        $this->view('templates/user/footer');
    }
    public function editprofile()
    {
        $data['judul'] = 'Edit Profile';
        $data['user'] = $this->model('UserModel')->getByFirst('username',$_SESSION['username']);
        if ($data['user']['role'] == 'expert') {
            $data['expert'] = $this->model('ExpertModel')->getByFirst('username',$_SESSION['username']);
        }
        $this->view('templates/user/header', $data);
        $this->view('user/editprofile', $data);
        $this->view('templates/user/footer');
    }
    public function edited()
    {
        $req = $_POST;
        $img = $_FILES['image'];
        $user = $this->model('UserModel')->getByFirst('username',$_SESSION['username']);
        $data=[
            'id' => $user['id'],
            'nama' => $req['nama'],
            'email' => $req['email'],
            'password' => $user['password'],
            "image" => $user['image'],
        ];
        $dataexpert = [];
        if ($user['role'] == 'expert') {
            $expert = $this->model('ExpertModel')->getByFirst('username',$_SESSION['username']);
            $dataexpert['username'] = $expert['username'];
            $dataexpert['whatsapp'] = $req['whatsapp'];
            $dataexpert['specialist'] = $req['specialist'];
        }
        if(strlen($img['name']) > 0){
            $folder = "img/".$user['username']."/";
            $name = $img['name'];
            // Path upload
            $filesave = $folder . $name;
            if (mkdir($folder)) {
                move_uploaded_file($img['tmp_name'], $filesave);
            }else{
                move_uploaded_file($img['tmp_name'], $filesave);
            }
            $data['image'] = $filesave;
            $_SESSION['userimage'] = $data['image'];
        }
        if (isset($req['password'])) {
           if (password_verify($req['password'],$user['password'])) {
               if ($req['newpassword']==$req['cnewpassword']) {
                   $data['newpassword'] = password_hash($req['newpassword'],PASSWORD_DEFAULT);
               }
           } 
        }
        if ($this->model('UserModel')->update($data)) {
            $this->model('ExpertModel')->update($dataexpert);
            $_SESSION['email'] = $req['email'];
            header('Location: ' . BASEURL . '/user/profile');
        }else{
            header('Location: ' . BASEURL . '/user/editprofile');
        }
    }
}