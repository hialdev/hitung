<section class="py-4">
    <div class="container">
        <div class="row">
            <div class="col-11 col-md-4 mx-auto bg-white rounded-3 p-3">
                <div class="d-flex align-items-center justify-content-between p-3 bg-light rounded-3">
                    <h2 class="text-muted fw-bold m-0">Profile Anda</h2>
                    <a href="<?= BASEURL ?>/user/editprofile" class="text-decoration-none"><span class="iconify text-primary fs-3" data-icon="akar-icons:edit"></span></a>
                </div>
                <img src="<?= BASEURL ?>/<?= $data['user']['image'] ?>" alt="" class="rounded-circle d-block mx-auto my-3" style="width: 10em;height:10em;">
                <h5 class="fw-bold text-center mb-4"><?= $data['user']['nama'] ?></h5>
                <?php if(isset($data['expert'])) : ?>
                    <div class="border-bottom p-2">
                        <div class="text-muted fs-6">Specialist</div>
                        <p class="m-0"><?= $data['expert']['specialist'] ?></p>
                    </div>
                    <div class="border-bottom p-2">
                        <div class="text-muted fs-6">Whatsapp</div>
                        <p class="m-0"><?= $data['expert']['whatsapp'] ?></p>
                    </div>
                <?php endif; ?>
                <div class="border-bottom p-2">
                    <div class="text-muted fs-6">Email</div>
                    <p class="m-0"><?= $data['user']['email'] ?></p>
                </div>
                <div class="border-bottom p-2">
                    <div class="text-muted fs-6">Posisi</div>
                    <p class="m-0"><?= $data['user']['role'] ?></p>
                </div>
                
            </div>
        </div>
    </div>
</section>