<?php 

    $nilai = 102;

    if (($nilai >= 80) && ($nilai <= 100)) {
    	echo "nilai anda", $nilai, "nilai huruf anda A";
    }
    elseif (($nilai >= 70) && ($nilai <= 79)) {
    	echo "nilai anda", $nilai, "nilai huruf anda B";
    }
    elseif (($nilai >= 60) && ($nilai <= 69)) {
    	echo "nilai anda", $nilai, "nilai huruf anda C";
    }
    elseif (($nilai >= 50) && ($nilai <= 59)) {
    	echo "nilai anda", $nilai, "nilai huruf anda D";
    }
    elseif (($nilai >= 0) && ($nilai <= 49)) {
    	echo "nilai anda", $nilai, "nilai huruf anda E";
    }
    else {
    	echo "nilai anda", $nilai, "nilai tidak berada dalam range";
    }

 ?>