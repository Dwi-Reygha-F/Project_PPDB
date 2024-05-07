<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Corona Admin</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="../assets/vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="../assets/vendors/css/vendor.bundle.base.css">
  <!-- Layout styles -->
  <link rel="stylesheet" href="../assets/css/style.css">
  <!-- End layout styles -->
  <link rel="shortcut icon" href="../assets/images/favicon.png" />
</head>

<body>
  <div class=" container-scroller">
    <!-- partial:../../partials/_sidebar.html -->




    <!-- BUKA SIDEBAR -->
    <?php
        // Ambil informasi peran pengguna dari sesi atau basis data
        $role = "admin"; // Misalnya, asumsikan pengguna adalah admin

        // Tentukan halaman dashboard yang sesuai berdasarkan peran pengguna
        if ($role === "admin") {
          $dashboardLink = "../admin.php";
        } else {
          $dashboardLink = "../petugas.php";
        }
        ?>

    <nav class="sidebar sidebar-offcanvas" id="sidebar">
      <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
        <a class="sidebar-brand brand-logo" href="<?php echo $dashboardLink; ?>"><svg height="30" width="200" xmlns="http://www.w3.org/2000/svg">
            <text x="50" y="20" fill="white">PPDB</text>
          </svg></a>
        <a class="sidebar-brand brand-logo-mini" href="<?php echo $dashboardLink; ?>"><svg height="30" width="200" xmlns="http://www.w3.org/2000/svg">
            <text x="5" y="20" fill="white">P</text>
          </svg></a>
        </div>
      <ul class="nav">
        <li class="nav-item profile">
          <div class="profile-desc">
            <div class="profile-pic">
            <?php
        include '../koneksi.php';
        session_start();
        $id=$_SESSION['id'];

        $query ="SELECT * FROM user where id='$id'";
        $result = mysqli_query($koneksi,$query);

        if (!$result){
die("query Error :".mysqli_error($koneksi)."-".mysqli_error($koneksi));
        }
        $no =1;

        while ($row = mysqli_fetch_assoc($result)) {
        ?>
                <div class="count-indicator">
                  <img class="img-xs rounded-circle " src="../assets/images/faces/<?php echo $row['gambar']; ?>"  alt="">
                  <span class="count bg-success"></span>
                </div>
               
                <div class="profile-name">
                  <h5 class="mb-0 font-weight-normal"><?php echo $row[ 'nama'] ?></h5>
                  <span><?php echo $row['level']?></span>
                </div>
              </div>
              <?php
        }
        ?>
          </div>
        </li>
        <li class="nav-item nav-category">
          <span class="nav-link">Navigation</span>
        </li>
        <?php
        // Ambil informasi peran pengguna dari sesi atau basis data
        $role = "admin"; // Misalnya, asumsikan pengguna adalah admin

        // Tentukan halaman dashboard yang sesuai berdasarkan peran pengguna
        if ($role === "admin") {
          $dashboardLink = "../admin.php";
        } else {
          $dashboardLink = "../petugas.php";
        }
        ?>



        <li class="nav-item menu-items">
          <a class="nav-link" href="<?php echo $dashboardLink; ?>">
            <span class="menu-icon">
              <i class="mdi mdi-speedometer"></i>
            </span>
            <span class="menu-title">Dashboard</span>
          </a>
        </li>
        <li class="nav-item menu-items">
          <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
            <span class="menu-icon">
              <i class="mdi mdi-table-large"></i>
            </span>
            <span class="menu-title">Data Master</span>
            <i class="menu-arrow"></i>
          </a>
          <div class="collapse" id="ui-basic">
            <ul class="nav flex-column sub-menu">
              <li class="nav-item"> <a class="nav-link" href="registrasi.php">Registrasi</a></li>
              <li class="nav-item"> <a class="nav-link" href="input_gelombang.php">Input Gelombang</a></li>

            </ul>
          </div>
        </li>
        <li class="nav-item menu-items">
          <a class="nav-link" data-toggle="collapse" href="#daftar" aria-expanded="false" aria-controls="daftar">
            <span class="menu-icon">
              <i class="mdi mdi-laptop"></i>
            </span>
            <span class="menu-title">Pendaftaran</span>
            <i class="menu-arrow"></i>
          </a>
          <div class="collapse" id="daftar">
            <ul class="nav flex-column sub-menu">
              <li class="nav-item"> <a class="nav-link" href="daftar_baru.php">Daftar Baru</a></li>
              <li class="nav-item"> <a class="nav-link" href="data_siswa.php">Data Siswa</a></li>
              <li class="nav-item"> <a class="nav-link" href="data_kaos.php">Data Kaos</a></li>
            </ul>
          </div>
        </li>
        <li class="nav-item menu-items">
          <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
            <span class="menu-icon">
              <i class="mdi mdi-security"></i>
            </span>
            <span class="menu-title">Pembayaran</span>
            <i class="menu-arrow"></i>
          </a>
          <div class="collapse" id="auth">
            <ul class="nav flex-column sub-menu">
              <li class="nav-item"> <a class="nav-link" href="transaksi.php">Transaksi</a></li>
              <li class="nav-item"> <a class="nav-link" href="data_pembayaran.php">Data Pembayaran</a></li>

            </ul>
          </div>
        </li>
        <li class="nav-item menu-items">
          <a class="nav-link" href="../logout.php">
            <span class="menu-icon">
              <i class="mdi mdi-logout text-danger"></i>
            </span>
            <span class="menu-title">Logout</span>
          </a>
        </li>
      </ul>
    </nav>
    <!-- TUTUP SIDEBAR -->


    <div class="container-fluid page-body-wrapper">
      <!-- partial:../../partials/_navbar.html -->

      <!-- BUKA NAVBAR 1 -->
      <nav class="navbar p-0 fixed-top d-flex flex-row">
        <div class="navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center">
          <a class="navbar-brand brand-logo-mini" href="../index.html"><img src="../assets/images/logo-mini.svg" alt="logo" /></a>
        </div>
        <div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch">
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="mdi mdi-menu"></span>
          </button>
          <div class="col-md-0 col-sm-0 clearfix  py-4">
            <ul class="navbar-nav pull-left">
              <li>
                <h3>
                  <div class="date">
                    <script type='text/javascript'>
                      <!--
                      var months = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
                      var myDays = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu'];
                      var date = new Date();
                      var day = date.getDate();
                      var month = date.getMonth();
                      var thisDay = date.getDay(),
                        thisDay = myDays[thisDay];
                      var yy = date.getYear();
                      var year = (yy < 1000) ? yy + 1900 : yy;
                      document.write(thisDay + ', ' + day + ' ' + months[month] + ' ' + year);
                      //
                      -->
                    </script></b>
                  </div>
                </h3>

              </li>
            </ul>
          </div>
          <ul class="navbar-nav navbar-nav-right">

            <li class="nav-item dropdown">
            <a class="nav-link" id="profileDropdown" href="#" data-toggle="dropdown">

<?php

$id = $_SESSION['id'];

$query = "SELECT * FROM user where id='$id'";
$result = mysqli_query($koneksi, $query);

if (!$result) {
  die("query Error :" . mysqli_error($koneksi) . "-" . mysqli_error($koneksi));
}
$no = 1;

while ($row = mysqli_fetch_assoc($result)) {
?>
  <div class="navbar-profile">
    <img class="img-xs rounded-circle" src="../assets/images/faces/<?php echo $row['gambar']; ?>" alt="">
    <p class="mb-0 d-none d-sm-block navbar-profile-name"><?php echo $row['nama'] ?></p>
    <i class="mdi mdi-menu-down d-none d-sm-block"></i>
  </div>
</a>
<?php
}
?>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="profileDropdown">
                <h6 class="p-3 mb-0">Profile</h6>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-dark rounded-circle">
                      <i class="mdi mdi-settings text-success"></i>
                    </div>
                  </div>
                  <script>
    function redirectToLogout() {
        window.location.href = "../logout.php";
    }
</script>
                  <div class="preview-item-content">
                 <p class="preview-subject mb-1"  >Settings</p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-dark rounded-circle">
                      <i class="mdi mdi-logout text-danger"></i>
                    </div>
                  </div>
                  <div class="preview-item-content">
                    <p class="preview-subject mb-1" onclick="redirectToLogout()">Log out</p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <p class="p-3 mb-0 text-center">Advanced settings</p>
              </div>
            </li>
          </ul>
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="mdi mdi-format-line-spacing"></span>
          </button>
        </div>
      </nav>
      <!-- TUTUP NAVBAR 2 -->
      <!-- NAVBAR ISI -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="page-header">
            <h3 class="page-title"> Material design icons </h3>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Icons</a></li>
                <li class="breadcrumb-item active" aria-current="page">Material design icons</li>
              </ol>
            </nav>
          </div>
          <div class="row">
            <div class="col-lg-12 grid-margin">
              <div class="card">
                <div class="card-body">
                <div class="col-md-12 order-md-1">
<h4 class="mb-3">Transaksi</h4>
<form class="needs-validation" novalidate="">
  <div class="row">
    <div class="col-md-2 mb-3">
      <label for="firstName">No Transaksi</label>
      <input type="text" class="form-control" id="firstName" placeholder="" value="" required="">
      <div class="invalid-feedback">
        Valid first name is required.
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="lastName">Tanggal</label>
      <input type="text" class="form-control" id="lastName" placeholder="" value="" required="">
      <div class="invalid-feedback">
        Valid last name is required.
      </div>
    </div>
    <div class="col-md-6 mb-3">
      <label for="firstName">Nama Siswa</label>
      <input type="text" class="form-control" id="firstName" placeholder="" value="" required="">
      <div class="invalid-feedback">
        Valid first name is required.
      </div>
    </div>
  </div>

  <div class="row">
    
    <div class="col-md-4 mb-3">
      <label for="firstName">Asal Sekolah</label>
      <input type="text" class="form-control" id="firstName" placeholder="" value="" required="">
      <div class="invalid-feedback">
        Valid first name is required.
      </div>
    </div>
    <div class="col-md-2 mb-3">
      <label for="firstName">Gelombang</label>
      <input type="text" class="form-control" id="firstName" placeholder="" value="" required="">
      <div class="invalid-feedback">
        Valid first name is required.
      </div>
    </div>
    <div class="col-md-6 mb-3">
      <label for="firstName">Jumlah</label>
      <input type="text" class="form-control" id="firstName" placeholder="" value="" required="">
      <div class="invalid-feedback">
        Valid first name is required.
      </div>
    </div>

        
    <div class="col-md-4 mb-3">
      <label for="firstName">Total Bayar</label>
      <input type="text" class="form-control" id="firstName" placeholder="" value="" required="">
      <div class="invalid-feedback">
        Valid first name is required.
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="firstName">Kembalian</label>
      <input type="text" class="form-control" id="firstName" placeholder="" value="" required="">
      <div class="invalid-feedback">
        Valid first name is required.
      </div>
    </div>
      <div class="col-md-4 mb-3">
      <label for="firstName">Keterangan</label>
      <input type="text" class="form-control" id="firstName" placeholder="" value="" required="">
      <div class="invalid-feedback">
        Valid first name is required.
      </div>
    </div>
    </div>

    <button class="btn btn-primary btn-lg btn-block" type="submit">Bayar</button>
</div>
</div>

                </div>
              </div>
            </div>
          </div>
          <!-- TUTUP NAVBAR ISI -->


          <!-- partial:../../partials/_footer.html -->

          <!-- FOOTER -->
          <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
              <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © Reyz</span>
            </div>
          </footer>
          <!-- TUTUP FOOTER -->


          <!-- partial -->
        </div>
      </div>
    </div>
    <!-- plugins:js -->
    <script src="../assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="../assets/js/off-canvas.js"></script>
    <script src="../assets/js/hoverable-collapse.js"></script>
    <script src="../assets/js/misc.js"></script>
    <script src="../assets/js/settings.js"></script>
    <script src="../assets/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <!-- End custom js for this page -->
</body>

</html>