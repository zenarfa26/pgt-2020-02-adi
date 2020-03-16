<!DOCTYPE html>
<html>
<head>
	<title>Tugas 1</title>
	<link rel="stylesheet" type="text/css" href="penambahan.css">
	<?php
//koneksi ke database mysql, silahkan di rubah dengan koneksi agan sendiri
//kalkulator adalah nama database yg ada di mysql php myadmin
$koneksi = mysqli_connect("localhost","root","","kalkulator");
//cek jika koneksi ke mysql gagal, maka akan tampil pesan berikut
if (mysqli_connect_errno()){
echo "Gagal melakukan koneksi ke MySQL: " . mysqli_connect_error();
}
?>
</head>
<body>
<center>
<div class="container" style="margin-top:20px">
<h2 font-color="white">My Task</h2>
<hr>
<table class="table table-striped table-hover table-sm table-bordered" font-color="white">
<thead class="thead-dark">
<tr font-color="white">
<th>No.</th>
<th>Nilai A</th>
<th>Nilai B</th>
<th>Hasil</th>
<th>Keterangan</th>
</tr>
</thead>

<?php
$sql = mysqli_query($koneksi, "SELECT * FROM operasi") or die(mysqli_error($koneksi));
if(mysqli_num_rows($sql) > 0){
$no = 1;
while($data = mysqli_fetch_assoc($sql)){
echo '
<tr>
<td><div class="td1">'.$no.'</div></td>
<td>'.$data['a'].'</td>
<td>'.$data['b'].'</td>
<td>'.$data['c'].'</td>
<td>'.$data['ket'].'</td>

</tr>
';
$no++;

}
//jika query menghasilkan nilai 0
}else{
echo '
<tr>
<td colspan="5">Tidak ada data.</td>
</tr>
';
}
?>


<div class="penambahan">
	<h2 class="nama">Penambahan</h2>

<form action="" method="POST">
	<center>
		
	<input class="ktk" type="text" name="num1" placeholder="Masukkan Angka" required>

</br>

	<input class="ktk" type="text" name="num2" placeholder="Masukkan Angka" required>

</br>
	<input class="btn" type="submit" name="submit" value="Hitung">
	<input class="btn" type="reset" name="reset" value="Reset">
</form><br>
<!--<input type="text" name="c" placeholder="Hasil" class="ktk1" value=$c>
<input type="text" name="ket" placeholder="Ket." class="ktk1"  value=$ket>
-->
<?php
if (isset($_POST['submit'])){
	$a = $_POST['num1'];
    $b = $_POST['num2'];
    $c = ($a+$b);
    if (0>$c) 
    	$keterangan= "D";
    elseif (0<=$c && 10>=$c) 
        $keterangan= "A";
    elseif (11<=$c && 20>=$c) 
        $keterangan= "B";
    else 
        $keterangan= "C";
for($i=0;$i<=10;$i++){
	$a=$b;
	$b=$c;
	$c=$a+$b;
	if (0>$c) {
    	$keterangan= "D";
    }
    elseif (0<=$c && 10>=$c) {
        $keterangan= "A";
    }
    elseif (11<=$c && 20>=$c) {
        $keterangan= "B";
    }
    else {
        $keterangan= "C";
}
$sql = mysqli_query($koneksi, "INSERT INTO operasi (a, b, c, ket) VALUES('$a', '$b', '$c','$keterangan')") or die(mysqli_error($koneksi));
}

echo "<br><input type='text' name='c' placeholder='Hasil' class=ktk1 value=$c>";
echo "<br><input type='text' name='ket' placeholder='Ket.' class=ktk1 value=$keterangan>";
}
if (isset($_GET['reset'])){

//melakukan query ke database, dengan cara SELECT data yang memiliki id yang sama dengan variabel $id
$cek = mysqli_query($koneksi, "SELECT * FROM operasi") or
die(mysqli_error($koneksi));
//jika query menghasilkan nilai > 0 maka eksekusi script di bawah
if(mysqli_num_rows($cek) > 0){
//query ke database DELETE untuk menghapus data dengan kondisi id=$id
$del = mysqli_query($koneksi, "DELETE * FROM operasi") or
die(mysqli_error($koneksi));
if($del){
echo '<script>alert("Berhasil menghapus data.");
document.location="penambahan.php";</script>';
}else{
echo '<script>alert("Gagal menghapus data.");
document.location="penambahan.php";</script>';
}
}
}
?>

</div>	
</body>
</html>