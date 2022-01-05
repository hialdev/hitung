<section class="py-5">
    <div class="container">
        <div class="grid">
            <div class="g-col-12">
                <h1 class="fw-bold">Quiz Started!</h1>
                <p class="text-primary text-capitalize fs-4"><?= $data['topik'] ?></p>
            </div>
            <div class="g-col-12 g-col-md-10 bg-white rounded-3 p-3">
                <h3 class="fw-bold py-2 m-0">Pilihan Ganda</h3>
                <hr>
                <form action="<?= BASEURL ?>/quiz/finish" method="POST">
                    <ol class="pt-3">
                    <?php foreach($data['pg'] as $pg) :?>
                        <li class="mb-3 fw-bold">
                            <span class="fw-bold"><?= $pg['soal'] ?></span>
                            <!-- Jawaban Array -->
                            <?php 
                                $jawaban = [];
                                while (count($jawaban) < 3) { 
                                    $rand = (string)rand(0,100);
                                    if (($rand !== $pg['jawaban'])) {
                                        $jawaban[] = $rand;
                                    }
                                }
                                array_push($jawaban,$pg['jawaban']);
                                shuffle($jawaban);
                            ?>
                            <div class="my-2 fw-normal">
                                <?php foreach($jawaban as $jwb) : ?>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="jawaban-<?= $pg['id'] ?>" value="<?= $jwb ?>">
                                        <label class="form-check-label">
                                            <?= $jwb ?>
                                        </label>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </li>
                    <?php endforeach; ?>
                    </ol>
                    <button type="submit" class="btn btn-primary w-100">Kumpulkan</button>
                </form>
            </div>
        </div>
    </div>
</section>