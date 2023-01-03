<?php 

    echo "Berikut Nilai Anda";
    echo "<br/>";

    echo "Nilai Anda : ",$_POST['nilai'];
    echo "<br/>";
    echo "Keterangan : ";

    if (($_POST ['nilai'] >= 80) && ($_POST ['nilai'] <= 100)) {
    	echo "A (Anda Lulus)";
    }
    elseif(($_POST ['nilai'] >= 70) && ($_POST ['nilai'] <= 79)) {
        echo "B (Anda Lulus)";
    }
    elseif (($_POST ['nilai'] >= 60) && ($_POST ['nilai'] <= 69)) {
        echo "C (Anda Lulus)";
    }
    elseif (($_POST ['nilai'] >= 50) && ($_POST ['nilai'] <= 59)) {
        echo "D (Anda Tidak Lulus)";
    }
    
    elseif (($_POST ['nilai'] >= 0) && ($_POST ['nilai'] <= 49)) {
        echo "E (Anda Tidak Lulus)";
    }
    else {
    	echo "Nilai Tidak Berada Dalam Range";
    }

 ?>