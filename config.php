<?php

date_default_timezone_set("Asia/Jakarta");
error_reporting(2);

	$user = 'root'; $pass = '';
	try{
		$config = new PDO('mysql:host=localhost;dbname=galih_id;', $user,$pass);
		//echo 'sukses';
	}catch(PDOException $e){
		echo 'KONEKSI GAGAL' .$e -> getMessage();
	}
	$view = 'fungsi/view/view.php'; //DIREKTORI PROSES SELECT /
?>

