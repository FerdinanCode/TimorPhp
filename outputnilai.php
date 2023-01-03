<html>
<head>
	<title>Data Diri Mahasiswa</title>
</head>
<style type="text/css">
		.form {border: solid thin #000;margin-left: 30%;margin-right: 30%;margin-top: 30px;background: #CF0}
		.tabel {font-size: 20px;color: #333;margin: 50px}
		.header {font-size: 36px;font-style: italic;text-align: center;}
	</style>

	<body bgcolor="#CC99FF">

		<?//tampung nilai form dalam variabel

		$nama_mhs=$_REQUEST[nama_mhs];
		$matkul=$_REQUEST[matkul];
		$jml_hadir=$_REQUEST[jml_hadir];
		$tugas=$_REQUEST[tugas];
		$uts=$_REQUEST[uts];
		$uas=$_REQUEST[uas];
		$akhir=(20*$tugas+10*$jml_hadir+35*$uts+35*$uas)/100;
		?>

		<? //angka

		if(($akhir<=100) && ($akhir>=91)) {$angka="A";}
		else if(($akhir<=90) && ($akhir>=81)) {$angka="B"};
		else if(($akhir<=80) && ($akhir>=71)) {$angka="B"};
		else if(($akhir<=70) && ($akhir>=61)) {$angka="C"};
		else if(($akhir<=60) && ($akhir>=51)) {$angka="C"};
		else if(($akhir<=50) && ($akhir>=41)) {$angka="D"};
		else if(($akhir<=40) && ($akhir>=31)) {$angka="D"};
		else if(($akhir<=30) && ($akhir>=21)) {$angka="E"};
		else if(($akhir<=20) && ($akhir>=11)) {$angka="E"};
		else if(($akhir<=10) && ($akhir>=0)) {$angka="E"};
		?>

		<? //tampilan ?>

		<div id="form2" class="form">
			<span class="tabel">
				<form><table align="center">
					<tr>
						<td>Nama</td>
						<td>
							<?echo "$_REQUEST[nama_mhs]"; ?>
						</td>
					</tr>
					<tr>
						<td>Nama</td>
						<td>
							<?echo "$_REQUEST[nama_mhs]"; ?>
						</td>
					</tr>
					<tr>
						<td>Mata Kuliah</td>
						<td>
							<?echo "$_REQUEST[matkul]"; ?>
						</td>
					</tr>
					<tr>
						<td>Jumlah Kehadiran</td>
						<td>
							<?echo "$_REQUEST[jml_hadir]"; ?>
						</td>
					</tr>
					<tr>
						<td>Nilai Tugas</td>
						<td>
							<?echo "$_REQUEST[tugas]";?>
						</td>
					</tr>
					<tr>
						<td>Nilai UTS</td>
						<td>
							<?echo "$_REQUEST[nuts]"; ?>
						</td>
					</tr>
					<tr>
						<td>Nilai UAS</td>
						<td>
							<?echo "$_REQUEST[nuas]"; ?>
						</td>
					</tr>
					<tr>
						<td>Nilai Akhir</td>
						<td>
							<?echo "$akhir"; ?>
						</td>
					</tr>
					<tr>
						<td>Nilai Angka</td>
						<td>
							<?echo "$angka"; ?>
						</td>
					</tr>
				</table>
			</form>
		    </span>
		</div>
	<div id="form1" class="footer">
    </body>
</html>