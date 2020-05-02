<?php
    function cetak_gambar($angkaganjil){
        $cek = $angkaganjil % 2;
        if ($cek == 1) {

            // nilai tengah
            $tengah = $angkaganjil / 2;
            $tengah = floor($tengah);
            // tutup nilai tengah

            // loop
            for ($row=0; $row < $angkaganjil; $row++) {
                for ($col = 0; $col < $angkaganjil; $col++) {
                    if ($col == 0 or $col == $angkaganjil-1 or $row == $tengah) {
                        echo "&nbsp; * &nbsp;";
                    }else{
                        echo "&nbsp; = &nbsp;";
                    }
                }
                echo "<br>";
            }
        }else{
            echo "angka bukan angka ganjil !!";
        }
    }
    cetak_gambar(5);
?>