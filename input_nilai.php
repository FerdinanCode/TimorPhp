<html>
<!--
*bundet.com
*Wawan Beneran
*PHP Form Hitung Nilai Mahasiswa
-->
<head>
<title>Belajar PHP </title>
</head>
<body>
<h2>PHP Hitung Nilai Mahasiswa</h2>
<style type="text/css">
#mhs{
 //margin: 10px;
 position: absolute;
 left: 60px;
}
</style>
<form action ="output_nilai.php" method="POST">
 Nama :
 <input id="mhs" type="text" name="nama"><br>
 Tugas:
 <input id="mhs" type="text" name="tugas"><br>
 UTS:
 <input id="mhs" type="text" name="uts"><br>
 UAS:
 <input id="mhs" type="text" name="uas"><br><br>

 <input id="mhs" type="submit" value="Hasil">

</form>
</body>
</html>