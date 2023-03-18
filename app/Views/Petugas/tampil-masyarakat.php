<?= $this->extend('/dashboard') ?>
<?= $this->section('content') ?>
<div class="card">
            <div class="card-body">
<h2>Data Masyarakat</h2>
<p>Berikut ini daftar masyarakat aplikasi Pelayanan Pengaduan yang
sudah terdaftar dalam database.</p>
<p>
<a href="/masyarakat/tambah" class="btn btn-primary
btn-sm">Tambah Masyarakat</a>
</p>
<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
<thead class="bg-light text-center">
<tr>
<th>No</th>
<th>NIK</th>
<th>Nama</th>
<th>Nomor Telphone</th>
<th>Aksi</th>
</tr>
</thead>
<tbody>
<?php foreach($ListMasyarakat as $key => $row): ?>
                            <tr>
                                <td><?= $key + 1 ?></td>
                                <td><?= $row['nik'] ?></td>
                                <td><?= $row['nama'] ?></td>
                                <td><?= $row['telp'] ?></td>
                                <td class="text-center">
                                    <div class="btn-group">
                                        <a href="/masyarakat/edit/<?= $row['nik']?>" class="btn btn-primary btn-sm"><i class="far fa-edit"> Edit </i></a>
                                        <a onclick="return confirm('Anda Yakin Ingin Menghapus Y/N')" href="/masyarakat/hapus/<?=$row['nik']?>" class="btn btn-secondary btn-sm"><i class="fas fa-trash-alt"> Hapus </i></a>
                                    </div>
                                </td>
                            </tr>
                            <?php endforeach;?>
</tbody>
</table>
</div>
          </div>
<?= $this->endSection() ?>