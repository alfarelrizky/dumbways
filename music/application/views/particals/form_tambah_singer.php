<?php
$id =  "singer-" . date("ymdhis") . rand(1000, 9999);
?>
<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table mr-1"></i>FORM TAMBAH DATA SINGER INFORMATION
    </div>
    <div class="card-body">
        <?php echo form_open_multipart('music/tambah_singer'); ?>
        <div class="form-row">
            <div class="col-md-6">
                <div class="form-group"><label class="small mb-1" for="inputFirstName">ID singer</label><input class="form-control py-4" type="text" value='<?php echo $id; ?>' name='id' required readonly /></div>
            </div>
            <div class="col-md-6">
                <div class="form-group"><label class="small mb-1" for="inputLastName">singer</label><input class="form-control py-4" type="text" name='singer' required /></div>
            </div>
            <div class="col-md-4">
                <div class="form-group"><a class="btn btn-danger btn-block" href="<?php echo site_url('music/master_data_singer') ?>">Batal</a></div>
            </div>
            <div class="col-md-8">
                <div class="form-group"><button class="btn btn-primary btn-block" type='submit'>Tambah</button></div>
            </div>
        </div>
        <?php echo form_close(); ?>
    </div>
</div>