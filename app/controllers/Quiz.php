<?php 

class Quiz extends Controller {
    public function index()
    {
        $data['judul'] = 'Quiz';
        $data['topik'] = $this->model('SoalModel')->topik();
        $this->view('templates/header', $data);
        $this->view('quiz/index', $data);
        $this->view('templates/footer');
    }
    public function prepare($topik)
    {
        $data['judul'] = 'Quiz';
        $data['topik'] = $topik;
        $this->view('templates/session');
        $this->view('templates/header', $data);
        $this->view('quiz/prepare', $data);
        $this->view('templates/footer');
    }

    public function run($topik)
    {
        $data['judul'] = 'Quiz';
        $data['topik'] = $topik;
        $_SESSION['topik'] = $topik;
        $data['pg'] = $this->model('SoalModel')->getSoal('pg',$topik);
        $data['essay'] = $this->model('SoalModel')->getSoal('essay',$topik);
        shuffle($data['pg']);
        $this->view('templates/session');
        $this->view('templates/header', $data);
        $this->view('quiz/run', $data);
        $this->view('templates/footer');
    }
    public function finish()
    {
        if (empty($_SESSION['topik'])) {
            header('Location :'.BASEURL.'/quiz');
        }
        $req = $_POST;
        $data['judul'] = 'Finish Quiz';
        $rightcount = 0;
        $wrong = [];
        foreach ($req as $key => $value) {
            $x = explode('-',$key);
            $id = $x[1];
            $soal = $this->model('SoalModel')->getByFirst('id',$id);
            if ($soal['jawaban'] == $value) {
                $rightcount++;
            }else{
                $wrong[] = $soal = $this->model('SoalModel')->getByFirst('id',$id);
            }
        }

        $nilai = $rightcount/count($req)*100;

        $data['nilai'] = $nilai;
        $data['benar'] = $rightcount.' dari '.count($req).' soal';
        $data['topik'] = $_SESSION['topik'];
        $data['wrong'] = $wrong;

        $this->view('templates/header', $data);
        $this->view('quiz/finish', $data);
        $this->view('templates/footer');
    }
}