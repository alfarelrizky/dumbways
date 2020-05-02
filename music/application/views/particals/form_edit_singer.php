<div class="card mb-4">
    <?php foreach ($data_edit as $edit) { ?>
        <div class="card-header">
            <i class="fas fa-table mr-1"></i>FORM EDIT DATA SINGER <?php echo strtoupper($edit['id']); ?>
        </div>
        <div class="card-body">
            <?php echo form_open_multipart('music/edit_singer'); ?>
            <div class="form-row">
                <input type="hidden" name='id' value='<?php echo $edit['id'] ?>' />
                <div class="col-md-12">
                    <div class="form-group"><label class="small mb-1" for="inputLastName">NAME singer</label><input class="form-control" type="text" name='name' value='<?php echo $edit['name'] ?>' required /></div>
                </div>
                <div class="col-md-4">
                    <div class="form-group"><a class="btn btn-danger btn-block" href="<?php echo site_url('music/master_data_singer') ?>">Batal</a></div>
                </div>
                <div class="col-md-8">
                    <div class="form-group"><button class="btn btn-success btn-block" type='submit'>Edit</button></div>
                </div>
            </div>
            <?php echo form_close(); ?>
        </div>
    <?php } ?>
</div>