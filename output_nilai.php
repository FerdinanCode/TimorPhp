<?php
/**
*gatewan.com
*Wawan Beneran
*PHP Kalkulasi Nilai Mahasiswa
*/

//  $nama=$_REQUEST["nama"];
//  $tugas=$_REQUEST["tugas"];
//  $uts=$_REQUEST["uts"];
//  $uas=$_REQUEST["uas"];
//  $hasil=($tugas*0.3)+($uas*0.4)+($uts*0.3);

//  echo("Nilai ");
//  echo($nama);
//  echo(" Adalah:");
//  echo("<br>");
//  if ($hasil>80)
//  echo("Hasil : <b>A</b>");
//  elseif ($hasil>70)
//  echo("Hasil : <b>B</b>");
//  elseif ($hasil>60)
//  echo("Hasil : <b>C</b>");
//  elseif ($hasil>40)
//  echo("Hasil : <b>D</b>");
//  else
//  echo("Hasil : <b>E</b>");

// ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>


<?php
error_reporting(0);
if(isset($_POST['hasil'])){
    $nama = $_POST['nama'];
    $jurusan = $_POST['jurusan'];
    $tugas = $_POST['tugas'];
    $uts = $_POST['uts'];
    $uas = $_POST['uas'];

    $nilaiAkhirMahasiswa = (0.25*$tugas)+(0.35*$uts)+(0.40*$uas);

    if($nilaiAkhirMahasiswa >= 80){
        $grade ="A";
        $huruf ="LULUS";
    }elseif($nilaiAkhirMahasiswa >= 65){
        $grade = "B";
        $huruf ="LULUS";
    }elseif($nilaiAkhirMahasiswa >= 50){
        $grade = "C";
        $huruf ="LULUS BERSYARAT";
    }elseif($nilaiAkhirMahasiswa >= 45){
        $grade = "D";
        $huruf ="TIDAK LULUS";
    }else{
        $grade = "E";
        $huruf="TIDAK LULUS";
    }
        

}

?>
<h1>Menghitung Nilai Akhir Mahasiswa</h1>
<div class="section">
<div class="container">
<form method="POST" action="">
<label for="">Nama Mahasiswa</label>
<input type="text" 
       name="nama"
       value="<?php echo $_POST['nama']; ?>">
<br>
<label for="">Jurusan</label>
<input type="text" 
       name="jurusan"
       value="<?php echo $_POST['jurusan']; ?>">
<br>
<label for="">Nilai Tugas</label>
<input type="text" 
       name="tugas"
       value="<?php echo $_POST['tugas']; ?>">
<br>
<label for="">Nilai UTS</label>
<input type="text" 
       name="uts"
       value="<?php echo $_POST['uts']; ?>">
<br>
<label for="">Nilai UAS</label>
<input type="text" 
       name="uas"
       value="<?php echo $_POST['uas']; ?>">
       <br>
       <input class="btn" type="submit" name="hasil" value="Nilai akhir">
       <br>
<label>Nilai akhir Mahasiswa</label>
        <input type="text" 
        name="hasil" 
        value="<?php echo $nilaiAkhirMahasiswa; ?>"> 
        <br>
       
       
</form>

</div>
<div class="container-card">
<div class="card">
    <div class="img-card">
        <img src="#" alt="">
    </div>
<hr class="card-garis">
<div class="card-body">
  <span class="text-kiri">Nama :</span> 
  <span class="text-kanan"><?php echo $_POST['nama']; ?></span><br>
  <span class="text-kiri">Jurusan :</span> 
  <span class="text-kanan"><?php echo $_POST['jurusan']; ?></span><br>
  <span class="text-kiri">Nilai Tugas :</span>
   <span class="text-kanan"><?php echo $_POST['tugas']; ?></span><br>
  <span class="text-kiri">Nilai UTS :</span> 
  <span class="text-kanan"><?php echo $_POST['uts']; ?></span><br>
  <span class="text-kiri">Nilai UAS :</span>
   <span class="text-kanan"><?php echo $_POST['uas']; ?></span><br>
  
  <span class="text-kiri">Nilai Akhir :</span> 
  <span class="text-kanan warna"><?php echo $nilaiAkhirMahasiswa; ?></span><br>
  <span class="text-kiri">Grade :</span>
   <span class="text-kanan warna"><?php echo $grade; ?></span><br>
  <span class="text-kiri">Kelulusan :</span>
   <span class="text-kanan warna"><?php echo $huruf; ?></span><br>

 </div>
</div>
</div>
</div>
</body>
</html>