<!-- Modal -->
<?php foreach ($list_music as $music) { ?>
    <div class="modal fade" id="music<?php echo $music['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Music <?php echo $music['namesinger'] ?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <video style='width:100%;height:300px;' poster='<?php echo base_url('file-upload/' . $music['photo']) ?>' controls loop> 
                        <source src='<?php echo base_url('file-upload/' . $music['title']) ?>' />
                    </video>
                    <div style='font-size:1vw;font-weight:bold;font-style:italic;'>
                        Nama Music : <?php echo $music['title'] ?> <br>
                        Durasi : <?php echo $music['durasi'] ?> <br>
                        Genre : <?php echo $music['namegenre'] ?> <br>
                        Singer : <?php echo $music['namesinger'] ?> <br>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">tutup</button>
                </div>
            </div>
        </div>
    </div>
<?php } ?>