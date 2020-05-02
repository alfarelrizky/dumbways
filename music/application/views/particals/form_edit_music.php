<div class="card mb-4">
    <?php foreach ($data_edit as $edit) { ?>
        <div class="card-header">
            <i class="fas fa-table mr-1"></i>FORM EDIT DATA MUSIC <?php echo strtoupper($edit['title']); ?>
        </div>
        <div class="card-body">
            <?php echo form_open_multipart('music/edit_music'); ?>
            <div class="form-row">
                <div class="col-md-6">
                    <input type="hidden" name='id' value='<?php echo $edit['id'] ?>' />

                    <label class="small mb-1" for="inputFirstName">MUSIC</label>
                    <div class="fileupload fileupload-new" data-provides="fileupload">
                        <div>
                            <span class="btn btn-file btn-primary">
                                <input type='file' name="userfilemusic">
                            </span>
                        </div>
                    </div>
                    <em>file Actual : <?php echo $edit['title'] ?></em>
                    <input class="form-control py-4" type="hidden" value='<?php echo $edit['title'] ?>' name='musik' />
                </div>
                <div class="col-md-6">
                    <label class="small mb-1" for="inputFirstName">GAMBAR</label>
                    <div class="fileupload fileupload-new" data-provides="fileupload">
                        <div>
                            <span class="btn btn-file btn-primary">
                                <input type='file' name="userfile">
                            </span>
                        </div>
                    </div>
                    <em>file Actual : <?php echo $edit['photo'] ?></em>
                    <input class="form-control py-4" type="hidden" value='<?php echo $edit['photo'] ?>' name='gambar' />
                </div>
                <div class="col-md-4">
                    <div class="form-group"><label class="small mb-1" for="inputLastName">DURASI</label><input class="form-control" type="time" name='durasi' value='<?php echo $edit['durasi'] ?>' required /></div>
                </div>
                <div class="col-md-4">
                    <div class="form-group"><label class="small mb-1" for="inputLastName">JENIS GENRE</label>
                        <select class="form-control" name='genre' required>
                            <option value='<?php echo $edit['idgenre'] ?>' selected><?php echo $edit['namegenre'] ?></option>
                            <?php
                            $query = $this->db->query("select * from genre");
                            $output =  $query->result_array();
                            foreach ($output as $hasil) {
                                echo "<option value='" . $hasil['id'] . "'>" . $hasil['name'] . "</option>";
                            }
                            ?>
                        </select>
                        <!-- <input class="<input class="form-control py-4" type="time" name='durasi' required />form-control py-4" type="text" placeholder="Pesan music Informasi" name='pesan' required /></div> -->
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group"><label class="small mb-1" for="inputLastName">SINGER</label>
                        <select class="form-control" name='singer' required>
                            <option value='<?php echo $edit['idsinger'] ?>' selected><?php echo $edit['namesinger'] ?></option>
                            <?php
                            $query = $this->db->query("select * from singers");
                            $output =  $query->result_array();
                            foreach ($output as $hasil) {
                                echo "<option value='" . $hasil['id'] . "'>" . $hasil['name'] . "</option>";
                            }
                            ?>
                        </select>
                        <!-- <input class="<input class="form-control py-4" type="time" name='durasi' required />form-control py-4" type="text" placeholder="Pesan music Informasi" name='pesan' required /></div> -->
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group"><label class="small mb-1" for="inputLastName">DEKSKRIPSI</label>
                        <textarea class="form-control py-4" rows="3" name='deskripsi' placeholder="Deskripsi Music..." required><?php echo $edit['deskripsi'] ?></textarea></div>
                    <!-- <input class="form-control py-4" type="text" placeholder="Pesan music Informasi" name='pesan' required /></div> -->
                </div>
                <div class="col-md-4">
                    <div class="form-group"><a class="btn btn-danger btn-block" href="<?php echo site_url('music/master_data_music') ?>">Batal</a></div>
                </div>
                <div class="col-md-8">
                    <div class="form-group"><button class="btn btn-success btn-block" type='submit'>Edit</button></div>
                </div>
            </div>
            <?php echo form_close(); ?>
        </div>
    <?php } ?>
</div>