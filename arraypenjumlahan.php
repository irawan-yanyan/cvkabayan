<?php

	function cariAngkaTigaJumlahNol($arr, $n){	 
    			$data_ditemukan = true; 
			    for ($i = 0; $i < $n - 2; $i++){ 
			        for ($j = $i + 1; $j < $n - 1; $j++){ 
					for ($k = $j + 1; $k < $n; $k++){
					// kondisi jika 3 angka ditemukan dengan jumlah samadengan nol	
			                if ($arr[$i] + $arr[$j] + $arr[$k] == 0) {
						       $data_ditemukan = true; 
						       $tampung = $arr[$i].",".$arr[$j].",".$arr[$k];
						       $arr_tampung = explode(",",$tampung);
						       sort($arr_tampung);
						       echo "[".implode(",",$arr_tampung)."] -> ".implode("+",$arr_tampung)." = 0 \n";
						       
                			  } 
            				} 
        			} 
    			    } 
     
    				// validasi jika data tidak ditemukan 
    				if ($data_ditemukan == false) 
        				echo " data 3 angka tidak ditemukan  ", "\n"; 
       			        }	 
              
		/* Main Program */

             // $angkainput = array(-1,0,1,2,-1,-4);
	       $angkainput = array(2,1,5,7,4,-8,-3,-1);
	     // $angkainput  = array(0, -1, 2, -3, 1);

	      echo "\n** Mohon :-) , utk eksekusi program melalui TERMINAL / CONSOLE  ( php arraypenjumlahan.php ) **\n";
              echo "Angka array yang di input : \n";
	      print_r($angkainput);
	      $jumlah_array = sizeof($angkainput);
	      echo " == hasil 3 elemen array yang di dapat untuk penjumlahan nol == \n";
              cariAngkaTigaJumlahNol($angkainput,$jumlah_array);

?>
