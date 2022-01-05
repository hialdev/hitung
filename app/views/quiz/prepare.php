<section class="py-5">
    <div class="d-flex align-items-center justify-content-center vh-100">
        <div class="col-11 col-lg-6 d-flex flex-column align-items-center justify-content-center">
            <img src="<?= BASEURL ?>/img/quiz.svg" alt="" class="d-block mx-auto" style="max-width: 40em;">
            <p class="text-muted text-center">Anda memilih quiz dengan topik :</p>
            <h1 class="text-center text-capitalize"><?= $data['topik'] ?></h1>
            <a href="<?= BASEURL ?>/quiz/run/<?= $data['topik'] ?>" class="btn btn-primary mt-4">Mulai Quiz</a>
        </div>
    </div>
</section>