<!--

* Copyright 2024 Blhack
* Coded by Blhack

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="./assets/img/favicon.png">
    
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.8/css/dataTables.dataTables.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  
    <script src="assets/js/dataTable.js"></script>
    <script>
        $(document).ready(function () {
            $("#example").DataTable();
        });
    </script>

    <title>
      Whatsapp_Bulk
    </title>
    <style>
        /* Classe personnalisée pour le modal */
        .modal-higher {
            z-index: 2000000; /* Assurez-vous que cela est supérieur au z-index de votre navbar */
        }
        .pave {
          position: fixed;
          z-index: 1000;
          left: 0;
          top: 0;
          width: 100%;
          height: 100%;
          overflow: auto;
          background-color: rgba(0,0,0,0.5); /* Semi-transparent */
        }

        .pave-content {
          background-color: #fefefe;
          margin: 15% auto;
          padding: 20px;
          border: 1px solid #888;
          width: 80%; /* Could be more or less, depending on screen size */
        }

        #closePave {
          color: #aaa;
          float: right;
          font-size: 28px;
          font-weight: bold;
        }

        #closePave:hover,
        #closePave:focus {
          color: black;
          text-decoration: none;
          cursor: pointer;
        }
    </style>


<!--     Fonts and icons     -->
<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />

<!-- Nucleo Icons -->
<link href="assets/css/nucleo-icons.css" rel="stylesheet" />
<link href="assets/css/nucleo-svg.css" rel="stylesheet" />

<!-- Font Awesome Icons -->
<script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>

<!-- Material Icons -->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link id="pagestyle" href="assets/css/material-dashboard.css" rel="stylesheet" />
  </head>


  <body class="g-sidenav-show  bg-gray-100">
    
    <div class="container  " id="navbarBlur" data-scroll="true"><div class="row"><div class="col-12">
      <nav class="navbar navbar-expand-lg border-radius-xl " >
        <div class="container-fluid px-0">
          <a class="navbar-brand font-weight-bolder ms-sm-3 text-success text-uppercase text-lg" href="index.php" rel="tooltip" title="Blhack designer" data-placement="bottom">
            Whatsapp Bulk
          </a>
          <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse" data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon mt-2">
              <span class="navbar-toggler-bar bar1"></span>
              <span class="navbar-toggler-bar bar2"></span>
              <span class="navbar-toggler-bar bar3"></span>
            </span>
          </button>
          <form class="navbar-nav mx-2">
            <div class="input-group input-group-outline justify-content-center ms-auto me-auto">
              <input type="text" class="form-control my-auto" style="width: 200px; height: 32px; " placeholder="Search...">
            </div>
            <div class="input-group input-group-outline " >
              <button class="btn btn-success mx-2 my-auto " style="height: 32px;" type="button">
                <i class="fas fa-search my-auto"></i>
              </button>
            </div>
          </form>
          <!-- Button trigger modal -->

          <div class="collapse navbar-collapse pt-3 pb-2 py-lg-0 w-100" id="navigation">
            <ul class="navbar-nav navbar-nav-hover ms-auto">
              <li class="nav-item dropdown dropdown-hover mx-2">
                <a class="nav-link ps-2 d-flex cursor-pointer align-items-center" id="dropdownMenuPages" data-bs-toggle="dropdown" aria-expanded="false">
                  <i class="material-icons opacity-6 me-2 text-md">dashboard</i>
                  Pages
                </a>
                <div class="dropdown-menu dropdown-menu-animation ms-n3 dropdown-md p-3 border-radius-xl mt-0 mt-lg-3" aria-labelledby="dropdownMenuPages">
                  <div class="d-none d-lg-block">
        <h6 class="dropdown-header text-dark font-weight-bolder d-flex align-items-center px-1">
          Formulaires
        </h6>
        <a href="index.php?title=Formulaire1" class="dropdown-item border-radius-md">
          <span>Formulaire 1</span>
        </a>
        <a href="index.php?title=Formulaire2" class="dropdown-item border-radius-md">
          <span>Formlaire 2</span>
        </a>
        <a href="#" class="dropdown-item border-radius-md">
          <span>Page 3</span>
        </a>
        <h6 class="dropdown-header text-dark font-weight-bolder d-flex align-items-center px-1 mt-3">
          Informations
        </h6>
        <a href="index.php?title=Profil" class="dropdown-item border-radius-md">
          <span>Profil</span>
        </a>
      </div>
      
      <div class="d-lg-none">
      <h6 class="dropdown-header text-dark font-weight-bolder d-flex align-items-center px-1">
          Formulaires
        </h6>
        <a href="index.php?title=Formulaire1" class="dropdown-item border-radius-md">
          <span>Formulaire 1</span>
        </a>
        <a href="index.php?title=Formulaire2" class="dropdown-item border-radius-md">
          <span>Formalaire 2</span>
        </a>
        <a href="#" class="dropdown-item border-radius-md">
          <span>Page 3</span>
        </a>
        <h6 class="dropdown-header text-dark font-weight-bolder d-flex align-items-center px-1 mt-3">
          Informations
        </h6>
        <a href="index.php?title=Profil" class="dropdown-item border-radius-md">
          <span>Profil</span>
        </a>
      
      </div>
      
                </div>
              </li>
      
              <li class="nav-item dropdown dropdown-hover mx-2">
                <a class="nav-link ps-2 d-flex cursor-pointer align-items-center" id="dropdownMenuBlocks" data-bs-toggle="dropdown" aria-expanded="false">
                  <i class="material-icons opacity-6 me-2 text-md">view_day</i>
                  Sections
                </a>
                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-animation dropdown-md dropdown-md-responsive p-3 border-radius-lg mt-0 mt-lg-3" aria-labelledby="dropdownMenuBlocks">
                  <div class="d-none d-lg-block">
        <li class="nav-item dropdown dropdown-hover dropdown-subitem">
          <a class="dropdown-item py-2 ps-3 border-radius-md" href="index.php?title=Tableaux">
            <div class="w-100 d-flex align-items-center justify-content-between">
              <div>
                <h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">Section 1</h6>
                <span class="text-sm">Les tableaux</span>
              </div>
            </div>
          </a>
          <div class="dropdown-menu mt-0 py-3 px-2 mt-3">
            <a class="dropdown-item ps-3 border-radius-md mb-1" href="index.php?title=Table1">
              Utilisateurs
            </a>
            <a class="dropdown-item ps-3 border-radius-md mb-1" href="index.php?title=Table2">
              Projets
            </a>
          </div>
        </li>
      
        <li class="nav-item dropdown dropdown-hover dropdown-subitem">
          <a class="dropdown-item py-2 ps-3 border-radius-md" href="#">
            <div class="w-100 d-flex align-items-center justify-content-between">
              <div>
                <h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">Navigation</h6>
                <span class="text-sm">Voir les navigations</span>
              </div>
            </div>
          </a>
          <div class="dropdown-menu mt-0 py-3 px-2 mt-3">
            <a class="dropdown-item ps-3 border-radius-md mb-1" href="#">
              Nav1
            </a>
            <a class="dropdown-item ps-3 border-radius-md mb-1" href="#">
              Nav2
            </a>
            <a class="dropdown-item ps-3 border-radius-md mb-1" href="#">
              Nav3
            </a>
          </div>
        </li>
      </div>
      
      <div class="row d-lg-none">
        <div class="col-md-12">
          <div class="d-flex mb-2">
            <div class="icon h-10 me-3 d-flex mt-1">
              <i class="ni ni-single-copy-04 text-gradient text-primary"></i>
            </div>
            <div class="w-100 d-flex align-items-center justify-content-between">
              <div>
                <h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">Section 1</h6>
              </div>
            </div>
          </div>
          <a class="dropdown-item ps-3 border-radius-md mb-1" href="index.php?title=Table1">
              Utilisateurs
            </a>
            <a class="dropdown-item ps-3 border-radius-md mb-1" href="index.php?title=Table2">
              Projets
            </a>
      
          <div class="d-flex mb-2 mt-3">
            <div class="icon h-10 me-3 d-flex mt-1">
              <i class="ni ni-laptop text-gradient text-primary"></i>
            </div>
            <div class="w-100 d-flex align-items-center justify-content-between">
              <div>
                <h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">Navigation</h6>
              </div>
            </div>
          </div>
          <a class="dropdown-item ps-3 border-radius-md mb-1" href="#">
              Nav1
            </a>
            <a class="dropdown-item ps-3 border-radius-md mb-1" href="#">
              Nav2
            </a>
            <a class="dropdown-item ps-3 border-radius-md mb-1" href="#">
              Nav3
            </a>
      
        </div>
      </div>
      
                </ul>
              </li>
      
              <li class="nav-item dropdown dropdown-hover mx-2">
                <a class="nav-link ps-2 d-flex cursor-pointer align-items-center" id="dropdownMenuDocs" data-bs-toggle="dropdown" aria-expanded="false">
                  <i class="material-icons opacity-6 me-2 text-md">article</i>
                  Documentation
                </a>
                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-animation dropdown-md dropdown-md-responsive mt-0 mt-lg-3 p-3 border-radius-lg" aria-labelledby="dropdownMenuDocs">
                  <div class="d-none d-lg-block">
        <ul class="list-group">
          <li class="nav-item list-group-item border-0 p-0">
            <a class="dropdown-item py-2 ps-3 border-radius-md" href="#">
              <h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">Whatsapp Bulk</h6>
              <span class="text-sm">Historique ...</span>
            </a>
          </li>
          <li class="nav-item list-group-item border-0 p-0">
            <a class="dropdown-item py-2 ps-3 border-radius-md" href="#">
              <h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">Les acteurs</h6>
              <span class="text-sm">Biographie...</span>
            </a>
          </li>
        </ul>
      </div>
      
      <div class="row d-lg-none">
        <div class="col-md-12 g-0">
          <a class="dropdown-item py-2 ps-3 border-radius-md" href="./pages/about-us.html">
            <h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">Whatsapp Bulk</h6>
            <span class="text-sm">Historique ...</span>
          </a>
      
          <a class="dropdown-item py-2 ps-3 border-radius-md" href="./pages/about-us.html">
            <h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">Les acteurs</h6>
            <span class="text-sm">Biographie...</span>
          </a>
        </div>
      </div>
      
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      </div></div></div>
    

    
      

      <main class="main-content border-radius-lg ">
        <!-- Navbar -->

<nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" data-scroll="true">
  <div class="container py-1 px-3">
    <h2 class=" font-weight-bolder mb-0 mx-auto" >
      <?php 
        if (isset($_GET['title'])) {
          echo $_GET['title'];
        }else {
          echo 'Bienvenue';
        }
      ?>
    </h2>
  </div>
</nav>

<!-- End Navbar -->
<?php include('menu.php') ?>

<!-- Button trigger modal -->


    </div>
  </div>
</div>

<footer class="footer py-4 fixed-bottom position-relative bottom-0 border-radius-lg bg-gradient-light opacity-6">
<span class=""></span>
  <div class="container">
    <div class="row align-items-center justify-content-lg-between">
      <div class="col-lg-6 mb-lg-0 mb-4">
        <div class="copyright text-center text-sm text-muted text-lg-start">
          © <script>
            document.write(new Date().getFullYear())
          </script>,
          fait avec <i class="fa fa-heart"></i> par
          <a href="#" class="font-weight-bold" target="_blank">Blhack</a> ... 
        </div>
      </div>
      <div class="col-lg-6">
        <ul class="nav nav-footer justify-content-center justify-content-lg-end">
          <li class="nav-item">
            <a href="#" class="nav-link text-muted" target="_blank">Whatsapp Bulk</a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link text-muted" target="_blank">A propos de nous</a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link text-muted" target="_blank">Blog</a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</footer>

            </div>

         
       </main>
    

      
<div class="fixed-plugin">
    <a class="fixed-plugin-button text-dark position-fixed px-3 py-2">
      <i class="material-icons py-2">settings</i>
    </a>
    <div class="card shadow-lg">
      <div class="card-header pb-0 pt-3">
        <div class="float-start">
          <h5 class="mt-3 mb-0">Configurations</h5>
          <p>Voir les options.</p>
        </div>
        <div class="float-end mt-4">
          <button class="btn btn-link text-dark p-0 fixed-plugin-close-button">
            <i class="material-icons">clear</i>
          </button>
        </div>
        <!-- End Toggle Button -->
      </div>
      <hr class="horizontal dark my-1">
      <div class="card-body pt-sm-3 pt-0">
        

        <!-- Navbar Fixed -->
        
        <div class="mt-3 d-flex">
          <h6 class="mb-0">Fixer la barre</h6>
          <div class="form-check form-switch ps-0 ms-auto my-auto">
            <input class="form-check-input mt-1 ms-auto" type="checkbox" id="navbarFixed" onclick="navbarFixed(this)">
          </div>
        </div>
        

        
        <hr class="horizontal dark my-3">
        <div class="mt-2 d-flex">
          <h6 class="mb-0">clair  / sombre</h6>
          <div class="form-check form-switch ps-0 ms-auto my-auto">
            <input class="form-check-input mt-1 ms-auto" type="checkbox" id="dark-version" onclick="darkMode(this)">
          </div>
        </div>
        <hr class="horizontal dark my-sm-4">
      </div>
    </div>
</div><!--   Core JS Files   -->
<script src="./assets/js/core/popper.min.js" ></script>
<script src="./assets/js/core/bootstrap.min.js" ></script>
<script src="./assets/js/plugins/perfect-scrollbar.min.js" ></script>
<script src="./assets/js/plugins/smooth-scrollbar.min.js" ></script>

<script>
  var win = navigator.platform.indexOf('Win') > -1;
  if (win && document.querySelector('#sidenav-scrollbar')) {
    var options = {
      damping: '0.5'
    }
    Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
  }
</script>

<!-- Github buttons -->
<script async defer src="https://buttons.github.io/buttons.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>



<!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc --><script src="./assets/js/material-dashboard.min.js?v=3.1.0"></script>
  </body>

</html>
