<section class="py-4">
    <div class="container">
        <div class="row">
            <div class="col-11 col-md-8 mx-auto">
                <h1 class="fw-bolder"><?= $data['belajar']['title'] ?></h1>
                <img src="<?= BASEURL ?>/<?= $data['belajar']['thumbnail'] ?>" alt="" class="w-100 rounded-3 my-4">
                <div class="p-3 p-md-5 bg-white rounded-3 content">
                    <?= $data['belajar']['body'] ?>
                </div> 
            </div>
        </div>
    </div>
</section>