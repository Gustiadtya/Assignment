<!DOCTYPE html>
<html>
<head>
	<title>Luas Segitiga</title>
</head>
<body>
	<table><form action="" method="POST" name="luassegitiga">
		<tr><td>Alas Segitiga :</td><td><input type="text" name="alas"></td></tr>
		<tr><td>Tinggi Segitiga :</td><td><input type="text" name="tinggi"></td></tr>
		<tr><td rowspan="2"><input type="submit" name="input" value="Hitung"></td></tr>
	</form></table>
</body>
</html>

<?php 
	if(isset($_POST['input'])){
		$alas=$_POST['alas'];
		$tinggi=$_POST['tinggi'];

		function segitiga($alas,$tinggi){
			$hasil=0.5*$alas*$tinggi;
			echo "Hasil : $hasil";
			return $hasil;
		}

		segitiga($alas,$tinggi);

	}
?>