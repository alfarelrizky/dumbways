<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table mr-1"></i>MASTER DATA SINGER INFORMATION
        <a href='<?php echo site_url('music/tambah_data_singer') ?>'><button type="button" class="btn btn-primary" style='float:right;box-shadow:-2px 1px #007316;'><i class="fas fa-book"></i> Tambah Data</button></a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>NAME SINGER</th>
                        <th>ACTION</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($list_singer as $singer) { ?>
                        <tr>
                            <td><?php echo $singer['id'] ?></td>
                            <td><?php echo $singer['name'] ?></td>
                            <td>
                                <a href='<?php echo site_url('music/arah_edit_data_singer/' . $singer['id']) ?>'><button type="button" style='padding:3px;box-shadow:-2px 1px #007316;' class="btn btn-success"><i class="fas fa-edit"></i></button></a>
                                <button type="button" style='padding:3px;box-shadow:-2px 1px #730000;' class="btn btn-danger" data-toggle="modal" data-target="#hapusdata<?php echo $singer['id']; ?>"><i class="fas fa-trash"></i></button>
                            </td>
                        </tr>
                    <?php }; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>