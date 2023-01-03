<?php 

   function luas_persegi($sisi) {
   	$luas = $sisi * $sisi;
   	return $luas;
   }

   $persegi = luas_persegi(5);
   echo "Luas Persegi dengan sisi  5 cm adalah $persegi";
   echo "<br/>";

   //persegi panjang
   function luas_pp($panjang, $lebar) {
   	$luas =$panjang * $lebar;
   	return $luas;
   }

   $pp = luas_pp(5,4);
   echo "Luas persegi panjang dengan panjang 5cm dan lebar 4cm adalah $pp";
   echo "<br/>";

   //segitiga
   function luas_segitiga($alas, $tinggi) {
   	$luas = 1/2 * $alas *$tinggi;
   	return $luas;
   }

   $segitiga = luas_segitiga(5,7);
   echo "Luas segitiga dengan alas 5cm dan tinggi 7cm adalah $segitiga";
   echo "<br/>";

 ?>