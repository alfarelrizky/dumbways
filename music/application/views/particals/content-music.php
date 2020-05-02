<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table mr-1"></i>MASTER DATA MUSIC INFORMATION
        <a href='<?php echo site_url('music/tambah_data_music') ?>'><button type="button" class="btn btn-primary" style='float:right;box-shadow:-2px 1px #007316;'><i class="fas fa-book"></i> Tambah Data</button></a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>TITLE</th>
                        <th>DURASI</th>
                        <th>NAME GENRE</th>
                        <th>NAME SINGER</th>
                        <th>PHOTO</th>
                        <th>DESKRIPSI</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($list_music as $music) { ?>
                        <tr>
                            <td><?php echo $music['id'] ?></td>
                            <td><?php echo $music['title'] ?></td>
                            <td><?php echo $music['durasi'] ?></td>
                            <td><?php echo $music['namegenre'] ?></td>
                            <td><?php echo $music['namesinger'] ?></td>
                            <td>
                                <img class="img-fluid" src="<?php echo base_url('file-upload/' . $music['photo']) ?>" width='100px' width='100px' alt="Image">
                            </td>
                            <td><?php echo $music['deskripsi'] ?></td>
                            <td>
                                <a href='<?php echo site_url('music/arah_edit_data_music/' . $music['id']) ?>'><button type="button" style='padding:3px;box-shadow:-2px 1px #007316;' class="btn btn-success"><i class="fas fa-edit"></i></button></a>
                                <button type="button" style='padding:3px;box-shadow:-2px 1px #730000;' class="btn btn-danger" data-toggle="modal" data-target="#hapusdata<?php echo $music['id']; ?>"><i class="fas fa-trash"></i></button>
                            </td>
                        </tr>
                    <?php }; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>