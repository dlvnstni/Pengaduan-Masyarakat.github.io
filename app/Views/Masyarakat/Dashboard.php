<?=$this->include('Layout/Headermasyarakat');?>
<!-- Awal Konten Aplikasi -->
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Selamat Datang di Aplikasi Pelaporan Pengaduan Masyarakat. Silahkan mengajukan keluhan anda!</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/masyarakat/dashboard">Home</a></li>
          <li class="breadcrumb-item">Pages</li>
        </ol>
      </nav>


    </div><!-- End Page Title -->

    <section class="section">
     
 <!-- Begin Page Content -->
        <div class="container-fluid">
<?php 
    if(empty($intro)){
        $this->renderSection('content');
    } else {
        echo $intro;
    }
    ?>
</div>
</main>
<?=$this->include('Layout/Footer');?>