<section class="py-4" style="background-color: #f7f7f7;">
    <div class="container py-4">
        <h2 class="fw-bold">Ayo Belajar!</h2>
        <div class="grid mt-4 align-items-start">
            <?php foreach($data['belajar'] as $learn) :?>
            <div class="g-col-12 g-col-md-3 rounded-3 overflow-hidden bg-white">
                <a href="<?= BASEURL ?>/belajar/al/<?= $learn['slug'] ?>" class="text-decoration-none text-dark d-flex flex-column align-items-center">
                <img src="<?= BASEURL ?>/<?= $learn['thumbnail'] ?>" alt="" class="w-100 d-block" style="max-height:13em;object-fit:cover">
                <div class="d-block p-3 px-4 mt-2 w-100">
                    <h5 class="fw-bold"><?= $learn['title'] ?></h5>
                    <p class="text-muted fs-6"><?= $learn['excerpt'] ?></p>
                </div>
                </a>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>