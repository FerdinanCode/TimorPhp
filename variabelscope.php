<?php 

    $panjang = 20;
    function kubus ($lebar) {
    	global $panjang;
    	global $tinggi;
    	$tinggi = 25;
    	$luas = $panjang * $lebar;
    	return $luas;
    }

    $luas_kubus = $tinggi * kubus(30);
    echo "Luas kubus adalah $luas_kubus";

 ?>