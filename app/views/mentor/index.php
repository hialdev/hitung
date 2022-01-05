<section class="py-5">
    <div class="container">
        <div class="grid">
            <?php $i = 0; ?>
            <?php foreach($data['expert'] as $expert) : ?>
            <div class="g-col-12 g-col-md-6 g-col-lg-4 bg-white rounded-3">
                <div class="d-flex align-items-center justify-content-start gap-3 p-3">
                    <img src="<?= BASEURL ?>/<?= $data['user'][$i]['image'] ?>" alt="<?= $data['user'][$i]['nama'] ?>" class="d-block rounded-circle" style="width: 8em;height:8em;object-fit:cover">
                    <div class="px-2">
                        <h5 class="fw-bold"><?= $data['user'][$i]['nama'] ?></h5>
                        <p class="text-muted"><?= $expert['specialist'] ?></p>
                        <a href="https://wa.me/<?= $expert['whatsapp'] ?>?text=Hallo,+Saya+<?= $_SESSION['username'] ?>+dari+hitung+ingin+belajar+bersama+anda." target="_blank" class="btn btn-sm btn-outline-primary d-inline-flex align-items-center gap-2">
                            <span class="iconify" data-icon="carbon:chat" style="color: currentColor;"></span>
                            Chat Now!
                        </a>
                    </div>
                </div>
            </div>
            <?php $i++; ?>
            <?php endforeach; ?>
        </div>
    </div>
</section>