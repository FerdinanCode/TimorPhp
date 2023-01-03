<?php 

    function luas_lingkaran($jari2) {
    	$luas = 3.14 * $jari2 * $jari2;
    	return $luas;
    }

    $lingkaran = luas_lingkaran(7);
    echo "Luas Lingkaran dengan jari-jari 7 cm adalah $lingkaran";

 ?>