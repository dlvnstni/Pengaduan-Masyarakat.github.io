<?= $this->extend('/dashboard') ?>
<?= $this->section('content') ?>
<div class="card">
<div class="card-body">
<h5 class="card-title">Data Hasil Respon Pengaduan Masyarakat</h5>

              <!-- Table with stripped rows -->
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Nik</th>
                    <th>Nama</th>
                    <th>Petugas</th>
                    <th>Tanggal Masuk</th>
                    <th>Tanggal Ditanggapi</th>
                    <th>Status</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                <?php foreach($ListTanggapan as $key => $row): ?>
                                            <tr>
                                                <td><?= $key + 1 ?></td>
                                                <td><?= $row['nik'] ?></td>
                                                <td><?= $row['nama'] ?></td>
                                                <td><?= $row['nama_petugas'] ?></td>
                                                <td><?= $row['tgl_pengaduan'] ?></td>
                                                <td><?= $row['tgl_tanggapan'] ?></td>
                                                <td><?= $row['status'] ?></td>
                                                <td class="text-center">
                                                    <div class="btn-group">
                                                        <a href="/pengaduan/tampilrespon/<?= $row['id_tanggapan']?>" class="btn btn-primary btn-sm"><i class="fas fa-info-circle"> Detail </i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <?php endforeach;?>
                </tbody>
                </table>
                </div>
          </div>  
<?= $this->endSection() ?>