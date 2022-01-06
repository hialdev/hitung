
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?= $data['judul']; ?></title>
    
    <link rel="stylesheet" href="<?= BASEURL; ?>/bs/scss/bootstrap.css">
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/custom.css">
    <link rel="icon" href="<?= BASEURL; ?>/img/faviconn.png?v=1" type="image/x-icon">
</head>
<body style="background-color: #f7f7f7;">

<nav class="navbar navbar-expand-lg navbar-light bg-white">
  <div class="container-fluid px-4">
    <a class="navbar-brand" href="<?= BASEURL ?>"><h2 class="m-0 fw-bold text-primary"><span class="text-dark fs-2">.hit</span>ung</h2></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav my-2">
        <li class="nav-item mx-0 mx-md-2">
          <a class="nav-link py-3 border-bottom" href="<?= BASEURL ?>/belajar">Belajar</a>
        </li>
        <li class="nav-item mx-0 mx-md-2">
          <a class="nav-link py-3 border-bottom" href="<?= BASEURL ?>/mentor">Mentor</a>
        </li>
        <li class="nav-item mx-0 mx-md-2">
          <a class="nav-link py-3 border-bottom" href="<?= BASEURL ?>/quiz">Quiz</a>
        </li>
      </ul>
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