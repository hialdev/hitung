<section class="py-5">
    <div class="container">
        <div class="grid">
            <?php foreach($data['widget'] as $widget) : ?>
                <div class="g-col-12 g-col-md-4">
                    <div class="text-dark d-flex flex-column flex-md-row align-items-center rounded-3 gap-3 bg-white p-3 justify-content-start">
                        <span class="iconify" data-icon="<?= $widget['icon'] ?>" style="width: 5em;height:5em"></span>
                        <div class="w-100">
                            <h5 class="fw-bold mb-3"><?= $widget['title'] ?></h5>
                            <a href="<?= BASEURL ?><?= $widget['url'] ?>" class="btn btn-outline-primary btn-sm w-100"><?= $widget['action'] ?></a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>