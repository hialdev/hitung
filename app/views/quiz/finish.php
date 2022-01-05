<section class="py-5">
    <div class="container">
        <h1 class="fw-bold d-inline-block w-75">Hi, <?= $_SESSION['username'] ?>! Lihat bagaimana pencapaian anda!</h1>

        <div class="grid mt-4 align-items-start">
            <div class="g-col-12 g-col-md-6 bg-white rounded-3 p-4 py-5 d-flex flex-column align-items-center">
                <h4>Hasil Quiz dengan topik <?= $data['topik'] ?></h4>
                <p class="text-muted">Nilai anda</p>
                <div class="fw-bold p-5 rounded-circle bg-light">
                    <h1 class="fw-bold m-0 d-block <?= ($data['nilai'] > 75 )?'text-success':'text-danger' ?>" style="font-size: 52px;"><?= $data['nilai'] ?></h1>
                </div>
                <p class="p-3 border rounded-3 text-muted mt-5">
                    Selamat atas penyelesaian anda!, Jika nilai tersebut belum sesuai dengan harapan Hitungers, Jangan khawatir hitungers bisa terus <a href="<?= BASEURL ?>/mentor" class="text-primary">belajar bersama kami</a>! atau jika hitungers kesulitan memahami materi Hitungers bisa <a href="<?= BASEURL ?>/mentor" class="text-primary">belajar dengan mentor!</a>
                </p>
            </div>
            <div class="g-col-12 g-col-md-6 bg-white rounded-3 p-4">
                <?php if(count($data['wrong'])>0) : ?>
                    <h3 class="fw-bold mt-3">Jawaban hitungers ada yang kurang tepat</h3>
                    <p>Jumlah Soal Benar : <?= $data['benar'] ?></p>
                    <hr>
                    <ol>
                        <?php foreach($data['wrong'] as $wrong) : ?>
                        <li class="py-3">
                            <h6 class="fw-bold"><?= $wrong['soal'] ?></h6>
                            <p>Jawaban yang benar : <strong><?= $wrong['jawaban'] ?></strong></p>
                        </li>
                        <?php endforeach ?>
                    </ol>
                <?php else : ?>
                    <h3 class="fw-bold mt-3">Jawaban hitungers Sempurna!</h3>
                    <p>Jumlah Soal Benar : <?= $data['benar'] ?></p>
                <?php endif; ?>
                <div class="d-flex align-items-center justify-content between gap-3">
                    <a href="<?= BASEURL ?>/belajar" class="btn btn-outline-primary w-100">Belajar</a>
                    <a href="<?= BASEURL ?>/quiz" class="btn btn-outline-primary w-100">Quiz Lain</a>
                </div>
            </div>
        
        </div>
    </div>
</section>