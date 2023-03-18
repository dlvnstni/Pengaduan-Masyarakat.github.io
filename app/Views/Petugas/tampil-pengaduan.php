<?= $this->extend('/dashboard') ?>
<?= $this->section('content') ?>
<div class="card">
            <div class="card-body">
<h2>Data Pengaduan Masyarakat</h2>
<p>Berikut ini data Pengaduan dari Masyarakat.</p>
<table class="table table-striped" id="dataTable" width="100%" cellspacing="0">
<thead class="bg-light text-center">
<tr>
<th>No</th>
<th>Nik</th>
<th>Nama</th>
<th>Tanggal Masuk</th>
<th>Status</th>
<th>Aksi</th>
</tr>
</thead>
<tbody>
<?php foreach($ListPengaduan as $key => $row): ?>
                            <tr>
                                <td><?= $key + 1 ?></td>
                                <td><?= $row['nik'] ?></td>
                                <td><?= $row['nama'] ?></td>
                                <td><?= $row['tgl_pengaduan'] ?></td>
                                <td><?= $row['status'] ?></td>
                                <td class="text-center">
                                    <div class="btn-group">
                                        <a href="/pengaduan/validasi/<?= $row['id_pengaduan']?>" class="btn btn-primary btn-sm"><i class="far fa-edit"> Validasi </i></a>
                                    </div>
                                </td>
                            </tr>
                            <?php endforeach;?>
</tbody>
</table>
</div>
          </div>
<?= $this->endSection() ?>