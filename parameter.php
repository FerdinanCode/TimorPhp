<?php 

    function jumlah() {
    	$jumlah_argumen = func_num_args();

    	$nilai = 0;
    	for ($angka = 0; $angka < $jumlah_argumen; $angka++) {

    		$nilai +=func_get_arg($angka);
    	}
    	return $nilai;
    }

    echo "jumlah dari jumlah(1,2,3,4,5) = ", jumlah(1,2,3,4,5);
    echo "<br/>";
    echo "jumlah dari jumlah(10,5) = ", jumlah(10,5);
    echo "<br/>";
    echo "jumlah dari jumlah(14,1) = ", jumlah(14,1);
    echo "<br/>";

    echo "jumlah dari jumlah(3,3) = ", jumlah(3,3);
    echo "<br/>";

 ?>