<?php
error_reporting(E_ALL ^ E_NOTICE);
$nama = "PHP";
echo "namanya adalah $nama <br>";

$a = 10;
$b = "5angka";
$hasil = $a+$b;
echo "Hasilnya = $hasil <br>";

if($hasil>15){
	echo "$hasil lebih dari 15";
}else{
	echo "$hasil kurang dari 15";
}
echo "<br>";
$bulan = 3;
switch($bulan){
	case 1 : echo "Januari"; break;
	case 2 : echo "Februari"; break;
	case 3 : echo "Maret"; break;
	case 4 : echo "April"; break;
	default : echo "Bukan Bulan";
	break;
}

//Menampikan angka 1 sampai $hasil
$p = 1;
while($p<$hasil){
	echo "$p";
	$p++;
}
echo "<br>";
for($p=1; $p<=$hasil; $p++){
	echo "$p";
}
?>