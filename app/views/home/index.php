<section class="py-5">
  <div class="container">
    <div class="grid align-items-center">
      <div class="g-col-12 g-col-md-5">
        <img src="<?= BASEURL ?>/img/math.svg" alt="">
      </div>
      <div class="g-col-12 g-col-md-7">
        <h1 class="fw-bold">Mari Belajar Matematika Dasar Bersama!</h1>
        <p>Belajar matematika dengan quiz didalamnya, sehingga hitungers bisa lebih baik dalam pembelajarannya! Selamat Belajar :D</p>
        <a href="<?= BASEURL ?>/belajar" class="btn btn-primary">Lihat Materi</a>
      </div>
    </div>
  </div>
</section>
<section class="py-4" style="background-color: #f7f7f7;">
  <div class="container">
    <div class="grid">
      <a href="<?= BASEURL ?>/belajar" class="d-block text-decoration-none text-dark g-col-12 g-col-md-4 bg-white rounded-3 p-3">
        <img src="<?= BASEURL ?>/img/math-card2.jpg" alt="" class="d-block w-100 rounded-3 mb-3" style="max-height: 15em;object-fit:cover;">
        <div class="d-block">
          <h5 class="fw-bold">Dapatkan Materi dan Tips Pembelajaran</h5>
          <p>Belajar dengan cepat dan mudah, akses berbagai materi dan tips gratis untuk Hitungers!</p>
        </div>
      </a>
      <a href="<?= BASEURL ?>/mentor" class="d-block text-decoration-none text-dark g-col-12 g-col-md-4 bg-white rounded-3 p-3">
        <img src="<?= BASEURL ?>/img/math-card3.jpg" alt="" class="d-block w-100 rounded-3 mb-3" style="max-height: 15em;object-fit:cover;">
        <div class="d-block">
          <h5 class="fw-bold">Belajar Langsung dengan Ahli!</h5>
          <p>Hitungers dapat belajar langsung dibawah bimbingan ahlinya loh!, Hitungers bisa memilih expert/mentornya!.</p>
        </div>
      </a>
      <a href="<?= BASEURL ?>/quiz" class="d-block text-decoration-none text-dark g-col-12 g-col-md-4 bg-white rounded-3 p-3">
        <img src="<?= BASEURL ?>/img/math-card4.jpg" alt="" class="d-block w-100 rounded-3 mb-3" style="max-height: 15em;object-fit:cover;">
        <div class="d-block">
          <h5 class="fw-bold">Menghitung dengan cepat!</h5>
          <p>Hitungers dapat menggunakan kalkulator hitung sebagai acuan pengerjaan soal dengan berbagai macam rumus!.</p>
        </div>
      </a>
    </div>
  </div>
</section>
<section class="py-4">
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