<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view('particals/header.php') ?>
    <style type="text/css">
        .sliding_tackle {
            /*   position: relative;*/
            overflow: hidden;
            position: relative;
            min-height: 1px;
            float: left;
            width: 100%;
            display: block;
            margin-bottom: 10px;
        }

        .sliding_tackle img {
            width: 100%;
        }

        .jumlah {
            font-size: 4vw;
            text-shadow: -1px 2px black;
        }

        .bayangan {
            box-shadow: -4px 4px black;
        }
    </style>
    <script src="<?php echo base_url('assets/demo/zepto.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/demo/flux.min.js'); ?>"></script>
</head>

<body class="sb-nav-fixed">
    <?php $this->load->view('particals/navbar.php') ?>
    <div id="layoutSidenav">
        <?php $this->load->view('particals/sidebar.php') ?>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid">
                    <h1 class="mt-4">MUSIC PANEL</h1>
                    <?php $this->load->view('particals/breadcrumb.php'); ?>
                    <?php $this->load->view('particals/content-home.php'); ?>
                    <?php $this->load->view('particals/modal-home.php'); ?>
                </div>
            </main>
            <?php $this->load->view('particals/footer.php'); ?>
        </div>
    </div>
    <!-- slider -->
    <script type="text/javascript">
        $(function() {
            var tarray = new Array();
            tarray.push('blocks2'); //kotak-kotak ana bayanganene
            tarray.push('tiles3d');
            tarray.push('bars3d'); //kotak muter tapi tugel-tugel

            window.myFlux = new flux.slider('#sliding_tackle', {
                autoplay: true,
                pagination: false,
                captions: false,
                transitions: tarray,
                delay: 2500
            });
        });
    </script>
    <!--slider-->
    <?php $this->load->view('particals/js.php'); ?>
</body>

</html>