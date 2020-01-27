<?php
 class faktorial{
  function countFaktorial($bilangan){
	   if($bilangan>=1){
  			echo "==List angka faktorial==\n";
  				for($i=1; $i <= $bilangan; $i++){
					     $faktorial = 1; 
					     echo $i. "! = ";
       						     for($j=$i; $j > 0; $j--) {     
    							if($j == 1){
							            echo " 1 = " .$faktorial;
        						}else{  
						      			echo $j ." x ";     
							}       
							        // untuk menghitung faktorial
						         	$faktorial*=$j; 
     						     }echo "\n";
  				}
	  }else if($bilangan == 0){
			   echo "0! = 1";
	  }else{
		  // validasi jika yang angka yang dimasukan < nol
		  echo "Maaf, Anda memasukkan bilangan < 0 .";
	}
	     echo "angka faktorial dari : ".$bilangan." adalah : ".$faktorial ;
	     
   }
}

        $nilai = readline("angka yang di masukan : ");
 	// validasi input angka
	if(is_numeric($nilai)){
		// set object faktorial
		$objFaktorial = new faktorial();
		$objFaktorial->countFaktorial($nilai);
	}else{
		echo "Maaf, input yang anda masukan bukan angka.";
	}





?>
