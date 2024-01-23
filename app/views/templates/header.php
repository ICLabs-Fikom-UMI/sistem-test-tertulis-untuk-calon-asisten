<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="http://localhost/phpmvc/public/css/bootstrap.css">
  <img src="logo.jgp.jpg" alt="Assement">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="<?= BASEURL; ?>/public/css/style.css">
  <title>Halaman <?= $data['judul']; ?></title>
  <style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Segoe UI', 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      }

      .user-img {
        width: 58px;
        border-radius: 100%;
        border: 1px solid #eee;
      }


      .sidebar {
        position: absolute;
        top: 0;
        left: 0;
        height: 100vh;
        /* width: 88px; */
        width: 250px;
        background-color:  #12171e;
        padding: .4rm .8rm;
        transition: all 0.5s ease;
      }

      .sidebar.active ~ .main-content {

        left: 250px;
        width: calc(100%-250px);
      }

      .sidebar.active {
        width: 250px;
      }

      .sidebar #btn {
        position: absolute;
        color: #fff;
        top: .4rem;
        left: 50%;
        font-size: 1.2rem;
        line-height: 50px;
        transform: translateX(-50px);
        cursor: pointer;
      }

      .sidebar.active #btn {
        left: 90%;
      }

      .sidebar .top .logo {
        color: #fff;
        display: flex;
        height: 50px;
        width: 100%;
        align-items: center;
        pointer-events: none;
        opacity: 0;
      }

      .sidebar.active .top .logo {
        opacity: 1;
      }

      .top .logo i {
        font-size: 2rem;
        margin-right: 5px;
      }

      .user {
        display: flex;
        align-items: center;
        margin: 1rem 0;
      }

      .user p{
        color: #fff;
        opacity: 1;
        margin-left: 1rem;
      }

      .bold {
        font-weight: 600;
      }

      .sidebar p {
        opacity: 1;
      }

      .sidebar ul li {
        position: relative;
        list-style-type: none;
        height: 50px;
        width: 90px;
        margin: 0,8rem auto;
        line-height: 50px;
      }

      .sidebar ul li a {
        color: #fff;
        display: flex;
        align-items:center;
        text-decoration: none;
        border-radius: 0.8rem;
      }

      .sidebar ul li a:haver {
        background-color: #ffff;
        color: #1217;
      }

      .sidebaer ul li a i {
        min-width: 50px;
        text-align: center;
        height: 50px;
        border-radius: 12px;
        line-height: 50px;
      }

      .sidebar .nav-items {
        opacity: 0;
      }
      .sidebar .active .nav-items {
        opacity: 1;
      }

      .sidebar ul li .tooltip {
        position: absolute;
        left: 125px;
        top: 50%;
        transform: translate(-50%, -50%);
        box-shadow:0 0.5rem 0.8rem rgba(0, 0, 0, 0.2);;
        border-radius: .6rem;
        padding: .4rem 1.2rem;
        line-height: 1.8rem;
        z-index: 20;
        opacity: 0;
      }

      .sidebar ul li:hover .tooltip {
        opacity: 1;
      }

      .sidebar.active ul li .tooltip {
        display: none;
      }

      .main-content {
        position: relative;
        background-color: #eee;
        min-height:100hv;
        top: 0;
        left: 80px;
        transition: all 0.5s ease;
        width: calc(100% - 80px);
        padding: 1rem;
      }

      .container {
        display: flex;
        justify-content: space-between;
      }
  </style>

</head>
<body>
<div class="sidebar">
  <div class="top">
 <div class="logo">
  <i class="bx-bxl-codepen"> </i>
  <span>Dosen Assistant Candidates</span>
 </div>
 <i class="bx bx-menu" id="btn"></i>
</div>
<div class="user">
  <img src="user-img.jpg" alt="me" class="user-img">
</div>
<p class="bold">Clint B.</p>
<p>Admin</p>
<ul>
  <li>
    <a href="#">
      <i class="bx bxs-grid-alt"></i>
      <span class="nav-item">Dashboard</span>
    </a>
    <span class="tooltip">Dashobard</span>
  </li>
  <li>
    <a href="#">
      <i class="bx bxs-shoopping-bag"></i>
      <span class="nav-item">Soal</span>
    </a>
    <span class="tooltip">Soal</span>
  </li>
  <li>
    <a href="#">
      <i class="bx bx-list-check"></i>
      <span class="nav-item">Kartu ujian</span>
    </a>
    <span class="tooltip">Kartu ujian</span>
  </li>
  <li>
    <a href="#">
      <i class="bx bxs-food-menu"></i>
      <span class="nav-item">Asisten</span>
    </a>
    <span class="tooltip">Asisten</span>
  </li>
  <li>
    <a href="#">
      <i class="bx bx-body"></i>
      <span class="nav-item">Calon Asisten</span>
    </a>
    <span class="tooltip">Calon Asisten</span>
  </li>
  <li>
    <a href="#">
      <i class="bx bx-location-plus"></i>
      <span class="nav-item">Materi Ujian</span>
    </a>
    <span class="tooltip">Materi ujian</span>
  </li>
  <li>
    <a href="#">
      <i class="bx bx-cog"></i>
      <span class="nav-item">pengaturan</span>
    </a>
    <span class="tooltip">pengaturan</span>
  </li>
  <li>
    <a href="#">
      <i class="bx bx-log-out"></i>
      <span class="nav-item">logout</span>
    </a>
    <span class="tooltip">logout</span>
  </li>
</ul>
</div>
 
<div class="main-content">
  <div class="container">
    <h1>Code Commerce</h1>
    <h1>Right Side</h1>
  </div>
</div>
</body>

<script>
  let btn = document.querySelector('#btn')
  let sidebar = document.querySelector('.sidebar')
  
  btn.onclick = function () {
    sidebar.classList.toggle('active');
  };
</script>
</html>


  