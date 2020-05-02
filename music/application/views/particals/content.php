<div class="card mb-4">
    <div class="card-header"><i class="fas fa-table mr-1"></i>LIST DATA PASIEN RUMAH SAKIT</div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Nama</th>
                        <th>Asal</th>
                        <th>Golongan Darah</th>
                        <th>Tanggal Masuk</th>
                        <th>Jenis Kelamin</th>
                        <th>Umur</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($list_pasien as $pasien) { ?>
                        <tr>
                            <td><?php echo $pasien['nama'] ?></td>
                            <td><?php echo $pasien['asal'] ?></td>
                            <td><?php echo $pasien['golongan_darah'] ?></td>
                            <td><?php echo $pasien['tanggal_masuk'] ?></td>
                            <td><?php echo $pasien['jeniskelamin'] ?></td>
                            <td><?php echo $pasien['umur'] ?></td>
                            <td><?php echo $pasien['status'] ?></td>
                        </tr>
                    <?php }; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>