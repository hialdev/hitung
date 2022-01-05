<section class="py-5">
<div class="container">
        <h1 class="fw-bold">Quiz Tersedia Berdasarkan Topik</h1>
        <div class="grid py-3">
            <?php foreach($data['topik'] as $topik) : ?>
                <a href="<?= BASEURL ?>/quiz/prepare/<?= $topik['topik'] ?>" class="d-flex aling-items-center justify-content-between text-decoration-none text-dark g-col-6 g-col-md-4 g-col-lg-3 bg-white rounded-3 p-4">
                    <h5 class="fw-bold m-0 text-capitalize"><?= $topik['topik'] ?></h5>
                    <span class="iconify" data-icon="bi:arrow-right-circle-fill" style="width: 1.3em;height:1.3em"></span>
                </a>
            <?php endforeach; ?>
        </div>
    </div>
</section>