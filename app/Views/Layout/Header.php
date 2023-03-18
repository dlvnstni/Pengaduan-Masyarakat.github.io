<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Pengaduan Masyarakat</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="/assets/img/favicon.png" rel="icon">
  <link href="/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="/assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="/assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="/assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="/assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin - v2.5.0
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  </head>

<body>
  <style>
    @media print {
      .form-group,
      .btn,
      .font-weight-bold,
        .pagetitle,
        .float-right,
        .footer,
        .align-items-center{
        display: none;
      }
    }
    </style>
  <!-- ======= Header ======= -->
  </br>
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="/dashboard" class="logo d-flex align-items-center">
        <img src="/assets/img/logo.png" alt="">
        <span class="d-none d-lg-block">AppPengaduan</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->
    <div class="float-right">
    <?php
    $tanggal= mktime(date("m"),date("d"),date("Y"));
    echo "Tanggal : <b>".date("d-M-Y", $tanggal)."</b> ";
    date_default_timezone_set('Asia/Jakarta');
    $jam=date("H:i:s");
    echo "| Pukul : <b>". $jam." "."</b>";
    $a = date ("H");
    if (($a>=6) && ($a<=11)){
    echo "<b>, Selamat Pagi !!</b>";
    }
    else if(($a>11) && ($a<=15))
    {
    echo ", Selamat Pagi !!";}
    else if (($a>15) && ($a<=18)){
    echo ", Selamat Siang !!";}
    else { echo ", <b> Selamat Malam </b>";}
    ?>
</div>
  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link collapsed" href="/dashboard">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-heading">Interface</li>
      <?php if(session()->get('level')=='admin'){?>
      <li class="nav-item">
        <a class="nav-link collapsed" href="/laporan/pengaduan">
          <i class="bi bi-layout-text-window-reverse"></i>
          <span>Laporan</span></a>
      </li>
      <?php } ?>
      <?php if(session()->get('level')=='admin'){?>
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-journal-text"></i><span>Master Data</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <h6 class="collapse-header">Custom Components:</h6>
            <a class="collapse-item" href="/petugas/user">
              <i class="bi bi-circle"></i><span>Data Petugas</span>
            </a>
          </li>
          <li>
            <a class="collapse-item" href="/petugas/masyarakat">
              <i class="bi bi-circle"></i><span>Data Masyarakat</span>
            </a>
          </li>
          </ul>
      </li><!-- End Forms Nav -->
      <?php } ?>
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
          <i class="ri-mark-pen-line"></i><span>Pengaduan Masyarakat</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <h6 class="collapse-header">Custom Components:</h6>
            <a class="collapse-item" href="/verifikasi">
              <i class="bi bi-circle"></i><span>Verifikasi & Validasi</span>
            </a>
          </li>
          <li>
            <a class="collapse-item" href="/respon">
              <i class="bi bi-circle"></i><span>Tanggapan</span>
            </a>
          </li>
        </ul>
      </li><!-- End Tables Nav -->

       <hr class="sidebar-divider d-none d-md-block">

      <li class="nav-item">
        <a class="nav-link collapsed" href="/logout" OnClick="return confirm('Anda Yakin ?')">
          <i class="ri-logout-circle-line"></i>
          <span>Logout</span>
        </a>
      </li><!-- End Contact Page Nav -->


    </ul>

  </aside><!-- End Sidebar-->