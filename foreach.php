<?php 
  
    $buah = [
    	1 => 'nanas',
    	2 => 'apel',
    	3 => 'jeruk',
    	];

    	echo "Nama-nama Buah: ";
    	echo "<br/>";
    	$buah[] = 'anggur';
    	$buah[] = 'pisang';
    	$buah[] = 'pepaya';

    	foreach ($buah as $nomor_buah => $nama_buah) {
    		echo "$nomor_buah : $nama_buah";
    		echo "<br/>";
    	}


 ?>