<?php
    $link = new mysqli("localhost", "root", "", "dulieu", "3307") or die("Can't connect to Database!");

	$idpb = $_POST['idpb'];
	$tenpb = $_POST['tenpb'];
	$mota = $_POST['mota'];

	$sql = "update phongban set tenpb = '$tenpb', mota = '$mota' where id = $idpb";
	$result = mysqli_query($link, $sql);

	header("Location: capnhat.php");

	mysqli_free_result($result);
	mysqli_close($link);
?>