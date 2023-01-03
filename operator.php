<?php 
	echo "oprator aritmatika";
	echo "<br>";
	$a = 10;
	$b = 2;
	//penjumlahan
	$c = $a + $b;
	echo " $a + $b = $c";
	echo "<hr>";
	//perkalian
	$c = $a * $b ;
	echo "$a * $b = $c";
	echo "<hr>";
	//pembagian
	$c = $a / $b;
	echo "$a / $b = $c";
	echo "<hr>";
	// pengurangan
	$c = $a - $b ;
	echo "$a - $b = $c";
	echo "<hr>";

	// menggunakan operator relasi lebih besar
	$c = $a > $b;
	echo "$a > $b: $c";
	echo "<hr>";

	// menggunakan operator relasi lebih kecil
	$c = $a < $b;
	echo "$a < $b: $c";
	echo "<hr>";

	// menggunakan operator relasi lebih sama dengan
	$c = $a == $b;
	echo "$a == $b: $c";
	echo "<hr>";

	// menggunakan operator relasi lebih tidak sama dengan
	$c = $a != $b;
	echo "$a != $b: $c";
	echo "<hr>";

	// menggunakan operator relasi lebih besar sama dengan
	$c = $a >= $b;
	echo "$a >= $b: $c";
	echo "<hr>";

	// menggunakan operator relasi lebih kecil sama dengan
	$c = $a <= $b;
	echo "$a <= $b: $c";
	echo "<hr>";

	echo "oprator relasi";
	echo "<br>";
	$a = true;
	$b = false;

	// variabel $c akan bernilai false
	$c = $a && $b;
	printf("%b && %b = %b", $a,$b,$c);
	echo "<hr>";

	// variabel $c akan bernilai true
	$c = $a || $b;
	printf("%b || %b = %b", $a,$b,$c);
	echo "<hr>";

	// variabel $c akan bernilai false
	$c = !$a;
	printf("!%b = %b", $a, $c);
	echo "<hr>";
	//operatopr logika
	$kondisi = true and false;
	echo "$kondisi =";
	echo var_dump($kondisi). "<br>";

	$kondisi1 = true and false;
	echo "$kondisi1 =";
	echo var_dump($kondisi1). "<br>";

	$kondisi2 = true xor false;
	echo "$kondisi2 =";
	echo var_dump($kondisi2). "<br>";

	$hasil3 =  false or true && false;
	echo "$hasil3 =";
	echo var_dump($hasil3). "<br>";

	$a = true;
	$b = false;
	$hasil4 = ($a and $b || $a or $b);
	echo "$hasil4 =";
	echo var_dump($hasil4);

	$a = true;
	$b = false;
		$hasil5 = ($a and $b || $a or $b);
	echo var_dump($hasil5);
 ?>