<?php 
	//variabel numeruk
	$jumlah = 1000;
	echo "UNIMOR memiliki siswa sebanyak", $jumlah;

	//variabel string
	$nama = "stefanus kabut";
	echo "<br> Stefanus kabut", $nama;

	//variabel array
	$mahasiswa = array('ofry','julio','tin');
	echo "<br> salah satu siswa berperestasi : ", $mahasiswa[0];

	$siswa_laki = 30;
	$siswa_perempuan = 30;
	echo "<br> total mahasiswa unimor sebanyak = ", $siswa_laki + $siswa_perempuan;

	//variabel numearik tipe data float
	$nilai1 = 80.5;
	$nilai2 = 6.7;
	$nilai3 = 89.8;
	$nilai4 = 67.8;
	$nilai5 = 90.7;
	$rata2 = ($nilai1 + $nilai2 + $nilai3 + $nilai4 + $nilai5 ) / 5;
	echo "<br> rata - rata nilai mahasiswa unimor :", $rata2;

 ?>