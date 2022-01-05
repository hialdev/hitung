<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= $data['judul']; ?></title>
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/bootstrap.css">
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/custom.css">
    <link rel="shortcut icon" href="<?= BASEURL; ?>/img/faviconn.png" type="image/x-icon">
    <script src="http://cdn.ckeditor.com/4.6.2/standard-all/ckeditor.js"></script>

</head>
<body style="background-color: #f7f7f7;">

<nav class="navbar navbar-expand-lg navbar-light bg-white">
  <div class="container-fluid px-4">
    <a class="navbar-brand" href="<?= BASEURL ?>"><h2 class="m-0 fw-bold text-primary"><span class="text-dark fs-2">.hit</span>ung</h2></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <?php if(isset($_SESSION['username'])) :?>
        <div class="d-flex align-items-center justify-content-between ms-auto gap-3">
          <a href="<?= BASEURL ?>/user/<?= $_SESSION['role'] ?>" class="text-decoration-none d-flex align-items-center justify-content-end gap-3">
            <h5 class="text-dark m-0">Hi, <?= $_SESSION['username'] ?></h5>
            <img src="<?= BASEURL ?>/<?= $_SESSION['userimage'] ?>" class="rounded-circle shadow" alt="" style="width:3em;height:3em">
          </a>
          <a href="<?= BASEURL ?>/auth/logout" class="text-decoration-none text-danger border-start ps-3">Logout
            <span class="iconify text-danger fs-3" data-icon="ri:logout-circle-r-fill"></span>
          </a>
        </div>
      <?php else : ?>
        <a href="<?= BASEURL ?>/auth/login" class="btn btn-primary ms-auto">
          Masuk
        </a>
      <?php endif; ?>
    </div>
  </div>
</nav>