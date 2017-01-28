<?php 

require_once 'class.php';

$publikasi = array();

//connect ke database
$con = mysqli_connect("localhost", "root", "endlesslove", "test_db");
if (mysqli_connect_errno()) {
	echo 'gagal terhubung ke database' . mysqli_connect_errno();
}

//query
$result = mysqli_query($con, "SELECT * FROM publikasi");

//work with data
while ($row = mysqli_fecth_array($result)) {
	$publikasi = new $row['tipe']($row);
}

?>