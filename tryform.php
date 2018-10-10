<center>
<form method="post" action='tryform.php' name='tambah'>
Angka 1 : <input type='number' name='a1'><br>
Angka 2 : <input type='number' name='a2'><br>
<input type ='submit' value='Jumlah' name='hasil'>
</form>
</center>

<?php
error_reporting(E_ALL ^ E_NOTICE);
$a1 = $_POST['a1'];
$a2 = $_POST['a2'];
$hasil = $_POST['hasil'];

$total = $a1 + $a2;

if($hasil){
	echo "Hasil Penjumlahan dari $a1 dan $a2 adalah $total";
}
?>