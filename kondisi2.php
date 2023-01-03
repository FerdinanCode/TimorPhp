<?php 
	$nilai = 800;
	if ($nilai >=80 && $nilai <=100){
		echo "nilai anda ", $nilai,"maka nilai huruf anda A";
	}elseif($nilai >=70 && $nilai <=79){
			echo "nilai anda ", $nilai,"maka,  nilai huruf anda B";
	}elseif($nilai >=60 && $nilai <=69){
			echo "nilai anda ", $nilai,"maka nilai huruf anda C";
	}elseif($nilai >=50 && $nilai <=49){
			echo "nilai anda ", $nilai,"maka nilai huruf anda D";
		}else{
			echo "nilai anda ", $nilai,"maka nilai huruf anda E";
		}

 ?>