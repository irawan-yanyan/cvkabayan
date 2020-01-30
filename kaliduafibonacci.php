<?php
	function fibKaliDua($jumlah_deret,$satu=4,$dua=3){
		$fibonacci = [$satu, $dua];
		for($i=0;$i<$jumlah_deret;$i++){
			$fibonacci[] = $fibonacci[$i] * 2;
		}
		return $fibonacci;
	}


	echo "\n** Mohon :-) , utk eksekusi program melalui TERMINAL / CONSOLE ( php kaliduafibonacci.php ) **\n";
	echo "===============================\n";
	echo "  Deret Fibonacci Multiply by 2\n";
	echo "===============================\n";
	echo implode(" ",fibKaliDua(14));
	echo "\n============================== \n";
	$jumlah_deret = readline(" Masukan angka deret : ");
	if(is_numeric($jumlah_deret)){
		echo implode(" ",fibKaliDua($jumlah_deret));
	}else{
		echo " Maaf angka yang anda masukan salah.";
	}
	echo "\n";
?>
