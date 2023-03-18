<?=$this->extend('Masyarakat/Dashboard')?>
<?=$this->section('content')?>

<div class="card">
            <div class="card-body">
                
<h2>Laporan Pengaduan Masyarakat </h2>

		<button onclick="window.print()" class="btn btn-outline-danger shadow float-right btn-sm mr-2">Print</button>	

<table class="table table-striped" id="dataTable" width="100%" cellspacing="5">
		<thead class="bg-light text-center">
						<tr>
						<th>No</th>
						<th>Nik</th>
						<th>Nama</th>
						<th>Petugas</th>
						<th>Tanggal Masuk</th>
						<th>Tanggal Ditanggapi</th>
                        <th>isi tanggapan</th>
						<th>Status</th>
						</tr>
					</thead>
					<tbody>

		<?php foreach ($ListPengaduan as $key => $row) : ?>
			
			<tr>
			<td><?= $key + 1 ?></td>
			<td><?= $row['nik'] ?></td>
			<td><?= $row['nama'] ?></td>
			<td><?= $row['nama_petugas'] ?></td>
			<td><?= $row['tgl_pengaduan'] ?></td>
			<td><?= $row['tgl_tanggapan'] ?></td>
            <td><?= $row['isi_tanggapan'] ?></td>
			<td><?= $row['status'] ?></td>
			</tr>
        <?php endforeach; ?>
        </tbody>
        </table>
		
          </div>
<?= $this->endSection(); ?>
