<?=$this->extend('dashboard');?>
<?=$this->section('content');?>

<div class="card">
            <div class="card-body">
                
<h2>Laporan Pengaduan Masyarakat </h2>
<p class="font-weight-bold">Untuk menampilkan laporan Pengaduan Masyarakat , silahkan masukan tanggal pengaduan.</p>

    <div class="form-group">
    <label class="font-weight-bold">Tanggal Pengaduan</label>
        <div class="input-group">
            <input type="date" class="form-control" id="txtTglPengaduan" autofocus autocomplete="off">
            <div class="input-group-append">
                <button type="button" class="btn btn-primary" id="tampilLaporan">Tampilkan</button>
            </div>
        </div>
    </div>

<div id="hasilCariLaporan">

          </div>
<?=$this->endSection();?>
