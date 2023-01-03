<?php 

    $nama = $_POST ['nama'];

    $matakuliah =$_POST ['matakuliah'];

    $absen = $_POST ['absen'];

    $tugas = $_POST ['tugas'];

    $uts = $_POST ['uts'];

    $uas = $_POST ['uas'];

//menghitung nilai dari yang tadi kita input

    $nilai_absen = $absen * 0.15;

    $nilai_tugas = $tugas * 0.25;

    $nilai_uts = $uts * 0.30;

    $nilai_uas = $uas * 0.30;

//penjumlahan dari nilai-nilai yang sudah diinput

    $nilai_akhir= $nilai_absen + $nilai_tugas + $nilai_uts + $nilai_uas;

//menampilkan grade berdasarkan hasil nilai akhir

    if($nilai_akhir>=80)
     {
    	$grade = "A";
    }

    elseif($nilai_akhir>=70) 
    {
    	$grade = "B";
    }

    elseif($nilai_akhir>=50)
     {
    	$grade = "C";

    }

    elseif($nilai_akhir>=40)
     {
    	$grade = "D";
    }

    else 
    {
    	$grade = "E";
    }

    echo 

    "

    <h1>Hitung Nilai Akhir Mahasiswa</h1>

    Nama Mahasiswa:$nama <br>

    Mata Kuliah:$matakuliah <br>

    Nilai Absen:$absen </br><br>

    Nilai Tugas:$tugas </br><br>

    Nilai UTS:$uts </br><br>

    Nilai UAS:$uas </br><br>


    <h4>Nilai Akhir : $nilai_akhir</h4>

    <h4>Grade:$grade</h4>


    ";


 ?>