<div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12">
        <div id="sliding_tackle" class="sliding_tackle" style="box-shadow:0 6px 26px rgba(41, 39, 39, 0.5); padding-bottom: -10px;">
            <img src="<?php echo base_url('assets/img/1.jpg') ?>" />
            <img src="<?php echo base_url('assets/img/2.jpg') ?>" />
            <img src="<?php echo base_url('assets/img/3.jpg') ?>" />
            <img src="<?php echo base_url('assets/img/4.jpg') ?>" />
        </div>
    </div>
</div>

<form action='<?php echo base_url() . "music/filter" ?>' method="post" style='margin:10px 0px;'>
    <div class="row">
        <div class="col-xl-4 col-lg-4 col-md-10">
            <select class="form-control" name='genre' required>
                <option value='' selected>- pilih Genre -</option>
                <option value='all'>ALL</option>
                <?php
                $query = $this->db->query("select * from genre");
                $output =  $query->result_array();
                foreach ($output as $hasil) {
                    echo "<option value='" . $hasil['id'] . "'>" . $hasil['name'] . "</option>";
                }
                ?>
            </select>
        </div>
        <div class="col-xl-2 col-lg-2 col-md-2">
            <button class='btn btn-success' type='submit'>FILTER</button>
        </div>
    </div>
</form>


<?php
$urut = 0;
if (!empty($list_music)) {
    foreach ($list_music as $music) {
        if ($urut == 0) {
?><div class="row"><?php
                }
                $urut++; ?>
            <div class="col-xl-6 col-md-6">
                <div class="cardbox bg-white" style='box-shadow:-5px 6px 5px #999999;'>
                    <div class="cardbox-heading">
                        <!-- START dropdown-->
                        <!--/ dropdown -->
                        <div class="media m-0">
                            <div class="d-flex mr-3">
                                <a href=""><img class="img-fluid rounded-circle" src="<?php echo base_url('assets/img/user.png') ?>" alt="User"></a>
                            </div>
                            <div class="media-body">
                                <p class="m-0"><?php echo $music['namesinger'] ?></p>
                                <small><span><i class="icon ion-md-time"></i> <?php echo $music['title'] ?></span></small>
                            </div>
                        </div>
                        <!--/ media -->
                    </div>
                    <!--/ cardbox-heading -->

                    <div class="cardbox-item">
                        <img class="img-fluid" src="<?php echo base_url('file-upload/' . $music['photo']) ?>" style='width:100%;height:500px;' alt="Image">
                        <div class='pesan'>
                            <?php echo $music['deskripsi'] ?>
                        </div>
                    </div>
                    <!--/ cardbox-item -->
                    <div class="cardbox-comments" style='width:100%;'>
                        <button class='btn btn-success' data-toggle="modal" data-target="#music<?php echo $music['id']; ?>" style='width:90%;padding:0px auto;'>Detail's</button>
                        <!--/. Search -->
                    </div>
                    <!--/ cardbox-like -->

                </div>
                <!--/ cardbox -->

            </div>
            <!--/ col-lg-6 -->
            <?php
            if ($urut == 2) {
                $urut = 0;
            ?>
            </div>
            <!--/ row -->
<?php
            }
        }
    } ?>