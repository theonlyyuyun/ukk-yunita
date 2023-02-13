<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>APLIKASI PENGADUAN MASYARAKAT | YUNITA FRIDAYANTI</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</head>

<body>
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container">
      <a class="navbar-brand" href="index.php?page=home">Aplikasi Pengaduan Masyarakat</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="index.php?page=registrasi">Daftar Akun</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php?page=login">Login</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <?php
  if (isset($_GET['page'])) {
    $page = $_GET['page'];
    switch ($page) {
      case 'login':
        include_once './login.php';
        break;
      case 'registrasi':
        include_once './registrasi.php';
        break;
      default:
        include 'home.php';
        break;
    }
  } else {
    include "home.php";
  }
  ?>
  <footer class="footer py-2 bg-light fixed-buttom">
    <div class="container">
      <p class="text-center">UKK RPL 2023 | Yunita | SMK WIRA HARAPAN</p>
    </div>
  </footer>

  <script type="text/javascript" src="asset/js/bootstrap.min.js"></script>
</body>

</html>