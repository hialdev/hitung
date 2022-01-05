<section class="py-5">
    <div class="container">
        <div class="d-flex vh-80 align-items-center justify-content-center">
            <div class="col-11 col-md-4 bg-white p-3 m-auto">
                <form action="<?= BASEURL ?>/auth/opengate" method="post">
                    <div class="py-3">
                        <h3 class="fw-bold">Login</h3>
                        <p>Hi, hitungers! Yuk masuk dulu untuk memulai :D</p>
                    </div>
                    <div class="form-floating bg-light mb-3">
                        <input type="text" name="username" class="form-control" id="floatingInput" placeholder="name@example.com">
                        <label for="floatingInput" class="text-muted">Username</label>
                    </div>
                    <div class="form-floating bg-light mb-3">
                        <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password">
                        <label for="floatingPassword" class="text-muted">Password</label>
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Masuk</button>
                    <p class="mt-4">Belum memiliki akun? <a href="<?= BASEURL ?>/auth/register" class="text-primary">Register</a></p>
                </form>
            </div>
        </div>
    </div>
</section>