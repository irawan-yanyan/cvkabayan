<?php
	function penjumlahan_tiga_angka_nol($nilai){	
		// inisialisai
		$jumlaharray = count($nilai) - 2;
		$hasil=[];
		for ($x = 0; $x < $jumlaharray; $x++) {
				     // validasi utk penjumlahan angka sama dengan nol
				    if ($nilai[$x] + $nilai[$x+1] + $nilai[$x+2] == 0){
				        array_push($hasil, "{$nilai[$x]} + {$nilai[$x+1]} + {$nilai[$x+2]} = 0");
				    }
		}
		// kondisi jika penjumlahan tidak ada yang nol
		if(empty($hasil)){
			 	print_r($nilai);
			        echo " Penjumlahan hasil nol dari 3 ( tiga ) angka dalam nilaiay tidak ditemukan."; 
				exit();
		}
		return $hasil;
	}
	       $angkainput = array(-1,0,1,2,-1,-4);
               print_r(penjumlahan_tiga_angka_nol($angkainput));

?>
