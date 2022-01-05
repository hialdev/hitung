<section class="py-4">
    <div class="container">
        <div class="row">
            <div class="col-11 col-md-4 mx-auto bg-white rounded-3 p-3">
                <div class="d-flex align-items-center justify-content-between p-3 bg-light rounded-3">
                    <h2 class="text-muted fw-bold m-0">Edit Profil Anda</h2>
                </div>
                <form action="<?= BASEURL ?>/user/edited" method="post" enctype="multipart/form-data">
                    <img id="image-preview" src="<?= BASEURL ?>/<?= $data['user']['image'] ?>" alt="" class="rounded-circle d-block mx-auto my-3" style="width: 10em;height:10em;">
                    <div class="mb-3">
                        <label for="formFile" class="form-label">Image</label>
                        <input class="form-control" type="file" id="file-input" name="image" accept="jpg,png,jpeg">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Nama</label>
                        <input type="text" name="nama" class="form-control" id="exampleFormControlInput1" placeholder="Nama Anda" value="<?= (isset($data['user']['nama'])?$data['user']['nama']:'') ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Email address</label>
                        <input type="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" value="<?= (isset($data['user']['email'])?$data['user']['email']:'') ?>" required>
                    </div>
                    <?php if($data['user']['role'] == 'expert') : ?>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Whatsapp</label>
                            <input type="number" name="whatsapp" class="form-control" id="exampleFormControlInput1" placeholder="No. Whatsapp" value="<?= (isset($data['expert']['whatsapp'])?$data['expert']['whatsapp']:'') ?>" required>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Specialist</label>
                            <input type="text" name="specialist" class="form-control" id="exampleFormControlInput1" placeholder="Spesialis" value="<?= (isset($data['expert']['specialist'])?$data['expert']['specialist']:'') ?>" required>
                        </div>
                    <?php endif; ?>
                    <hr>
                    <p class="text-muted"><span class="text-dark">Ganti Password</span> <br>(kosongkan jika tidak ingin mengganti)</p>
                    <div class="mb-3">
                        <input type="password" name="password" class="form-control" id="exampleFormControlInput1" placeholder="Password Anda">
                    </div>
                    <div class="mb-3">
                        <input type="password" name="newpassword" class="form-control" id="exampleFormControlInput1" placeholder="Password baru">
                    </div>
                    <div class="mb-3">
                        <input type="password" name="cnewpassword" class="form-control" id="exampleFormControlInput1" placeholder="Konfirmasi password baru">
                    </div>
                    <button class="btn btn-primary w-100">Simpan Perubahan</button>
                </form>
            </div>
        </div>
    </div>
</section>