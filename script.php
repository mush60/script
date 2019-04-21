<?php

//mengambil panjang array dari inputan
echo "input jumlah array genap : ";
$panjang_array = trim(fgets(STDIN));

//mengisi array
if($panjang_array%2==0) {
	$jml_kelompok = $panjang_array/2;
	for($i=0; $i<$panjang_array; $i++) {
		echo  "insert array ".$i." ";
		$arr[$i] = trim(fgets(STDIN));
	}
	sort($arr);
	$total_min = 0;
	//membuat kelompok array
	for($j=0; $j<$panjang_array; $j+=2) {
		$k = $j+1;
		$var1 = $arr[$j];
		$var2 = $arr[$k];

		$kel_arr[] = [$var1, $var2];		

		$total_min = $total_min + $var1;
	}
	print_r(array_values($kel_arr));

	echo "Total Minimun Array : ".$total_min."\n";

	echo "done\n";
}
else {
	echo "panjang aray ganjil\n";
}
?>
