<?php

	function cariDuplikat($jml){
        		return $jml > 1;
	}

      function countLengthC ($xa1,$xa2,$xb1,$xb2){  
	       $panjang_c = 0;
	       $tampung_garis_A = array(); 
	       $tampung_garis_B = array();    
	       /* validasi input X */
	       
	       if(is_numeric($xa1) && is_numeric($xa2) && is_numeric($xb1) && is_numeric($xb2)){
		if(($xa2>$xa1) && ($xb2>$xb1)){
			echo  "\n * Program siap dijalankan. *\n";
		}else{
			 echo "\n Angka ruas garis X yang dimasukan = ( ".$xa1.",".$xa2.",".$xb1.",".$xb2." )\n ";
			 echo  "\n Maaf Angka yang dimasukan Xa2 dan Xb2 harus lebih besar dari Xa1 dan Xb1 \n";
			 exit();
		}
	
	    }else{
		    echo  " \n Maaf angka yang dimasukan salah.";
		    exit();
	    }
        echo "Angka ruas garis X yang dimasukan = ( ".$xa1.",".$xa2.",".$xb1.",".$xb2." )\n ";	
        echo "Garis A ( Xa1 = ".$xa1.", Xa2 =".$xa2." ) dan ruas garis B ( Xb1=".$xb1.", Xb2=".$xb2." )\n";
	       
	// ambil deret angka garis A ( xa1 dan xa2 )
	for($i=$xa1-1;$i<$xa2;$i++){
		$tampung_garis_A[] = $i + 1;
	}
	// ambil deret angka garis B ( xb1 dan xb2 )
	for($i=$xb1-1;$i<$xb2;$i++){
		$tampung_garis_B[] = $i +1;
	}	
     	echo "Deret Angka untuk ruas garis A = ( ".implode(" ",$tampung_garis_A).")\n";	
	echo "Deret Angka untuk ruas garis B = ( ".implode(" ",$tampung_garis_B).")\n";	
	echo "Maka ruas garis yang berhimpit adalah : ";
        $garis_x_merge = array_merge($tampung_garis_A,$tampung_garis_B);
	$hasil = array_filter(array_count_values($garis_x_merge),"cariDuplikat");
	echo count($hasil)-1;
	echo "\n";
	}

	/* Program Utama */
       	echo "\n** Mohon :-) , utk eksekusi program melalu terminal / console ( php panjangruasgaris.php ) **\n";
	/* pengujian */
	 print_r(countLengthC(0,10,7,14));
	 print_r(countLengthC(0,4,2,6));
	 print_r(countLengthC(1,10,4,7));
	 print_r(countLengthC(5,7,0,11));
	 print_r(countLengthC(2,8,2,10));
	 print_r(countLengthC(1,5,5,10));

?>
