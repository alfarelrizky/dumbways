    <?php
    function count_handshake($hadirin){
        // tutup input jumlah hadirin

        // proses
        $shake = 0;
        if (isset($hadirin)) {
            for ($i = 1; $i < $hadirin; $i++) {
                for ($b = $i; $b < $hadirin; $b++) {
                    $shake += 1;
                }
            }
            echo "<em>JUMLAH JABAT TANGAN = </em>" . $shake . "";
        }
        // proses
    }
    // input jumlah hadirin
    $hadir = 4;
    echo "<b>jumlah hadirin = ".$hadir."</b><br>";
    count_handshake($hadir);
    ?>