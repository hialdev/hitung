<section class="py-5">
    <div class="container">
        <div class="d-flex vh-80 align-items-center justify-content-center">
            <div class="col-11 col-md-4 bg-white p-3 m-auto">
                <form action="<?= BASEURL ?>/auth/welcome" method="post">
                    <div class="py-3">
                        <h3 class="fw-bold">Expert Register</h3>
                        <p>Jadilah Guru Para Hitungers!</p>
                    </div>
                    <div class="form-floating bg-light mb-3">
                        <input type="text" name="username" class="form-control" id="floatingInput" placeholder="name@example.com">
                        <label for="floatingInput" class="text-muted">Username</label>
                    </div>
                    <div class="form-floating bg-light mb-3">
                        <input type="text" name="nama" class="form-control" id="floatingInput" placeholder="name@example.com">
                        <label for="floatingInput" class="text-muted">Nama</label>
                    </div>
                    <div class="form-floating bg-light mb-3">
                        <input type="text" name="specialist" class="form-control" id="floatingInput" placeholder="name@example.com">
                        <label for="floatingInput" class="text-muted">Spesialis</label>
                    </div>
                    <div class="form-floating bg-light mb-3">
                        <input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                        <label for="floatingInput" class="text-muted">Email address</label>
                    </div>
                    <div class="form-floating bg-light mb-3">
                        <input type="number" name="whatsapp" class="form-control" id="floatingInput" placeholder="name@example.com">
                        <label for="floatingInput" class="text-muted">No Whatsapp (gunakan angka 62 bukan 0)</label>
                    </div>
                    <div class="form-floating bg-light mb-3">
                        <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password">
                        <label for="floatingPassword" class="text-muted">Password</label>
                    </div>
                    <div class="form-floating bg-light mb-3">
                        <input type="password" name="cpassword" class="form-control" id="floatingPassword" placeholder="Password">
                        <label for="floatingPassword" class="text-muted">Konfirmasi Password</label>
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Daftar</button>
                    <p class="mt-4">Sudah memiliki akun? <a href="<?= BASEURL ?>/auth/login" class="text-primary">Login</a></p>
                </form>
            </div>
        </div>
    </div>
</section>