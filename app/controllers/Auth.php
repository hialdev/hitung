<?php 

class Auth extends Controller {
    public function login()
    {
        $data['judul'] = 'Login';
        $data['nama'] = $this->model('UserModel')->getAll();
        $this->view('templates/header', $data);
        $this->view('auth/login', $data);
        $this->view('templates/footer');
    }
    public function opengate()
    {
        $req = $_POST;
        $user = $this->model('UserModel')->getByFirst('username',$req['username']);
        if (password_verify($req['password'],$user['password'])) {
            $_SESSION['username'] = $user['username'];
            $_SESSION['role'] = $user['role'];
            $_SESSION['email'] = $user['email'];
            $_SESSION['userimage'] = $user['image'];
            Flasher::setFlash('berhasil', 'ditambahkan', 'success');
            if ($user['role']=='admin') {
                header('Location: ' . BASEURL . '/admin');
            }else{
                header('Location: ' . BASEURL . '/');
            }
        }else{
            Flasher::setFlash('Password tidak matching', 'ditambahkan', 'danger');
            header('Location: ' . BASEURL . '/auth/login');
        }
    }
    public function register()
    {
        $data['judul'] = 'register';
        $this->view('templates/header', $data);
        $this->view('auth/register', $data);
        $this->view('templates/footer');
    }
    public function beexpert()
    {
        $data['judul'] = 'Regist to Become Our Expert';
        $this->view('templates/header', $data);
        $this->view('auth/beexpert', $data);
        $this->view('templates/footer');
    }
    public function welcome()
    {
        $req = $_POST;
        $data = [];
        $expert = [];
        if ($req['password']==$req['cpassword']) {
            $data = [
                "username" => $req['username'],
                "nama" => $req['nama'],
                "email" => $req['email'],
                "role" => "expert",
                "password" => password_hash($req['password'],PASSWORD_DEFAULT),
            ];
            $expert = [
                "username" => $req['username'],
                "whatsapp" => $req['whatsapp'],
                "specialist" => $req['specialist'],
            ];
            if ($this->model('UserModel')->add($data) > 0) {
                $this->model('ExpertModel')->add($expert);
                Flasher::setFlash('berhasil', 'ditambahkan', 'success');
                header('Location: ' . BASEURL . '/auth/login');
            }else{
                Flasher::setFlash('gagal', 'ditambahkan', 'danger');
                header('Location: ' . BASEURL . '/auth/register');
            }
        }else{
            Flasher::setFlash('Password tidak matching', 'ditambahkan', 'danger');
            header('Location: ' . BASEURL . '/auth/register');
        }
    }
    public function registered()
    {
        $req = $_POST;
        $data = [];
        if ($req['password']==$req['cpassword']) {
            $data = [
                "username" => $req['username'],
                "nama" => $req['nama'],
                "email" => $req['email'],
                "role" => "user",
                "password" => password_hash($req['password'],PASSWORD_DEFAULT),
            ];
            if ($this->model('UserModel')->add($data) > 0) {
                Flasher::setFlash('berhasil', 'ditambahkan', 'success');
                header('Location: ' . BASEURL . '/auth/login');
            }else{
                Flasher::setFlash('gagal', 'ditambahkan', 'danger');
                header('Location: ' . BASEURL . '/auth/register');
            }
        }else{
            Flasher::setFlash('Password tidak matching', 'ditambahkan', 'danger');
            header('Location: ' . BASEURL . '/auth/register');
        }
    }

    public function logout()
    {
        session_destroy();
        header('Location: ' . BASEURL . '/auth/login');
    }
}