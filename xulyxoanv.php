<?php
    $link = new mysqli("localhost", "root", "", "dulieu", "3307") or die("Can't connect to Database!");

	$idnv = $_REQUEST['idnv'];

	$sql = "delete from nhanvien where idnv = $idnv";
	$result = mysqli_query($link, $sql);

	header("Location: xoanv.php");

	mysqli_free_result($result);
	mysqli_close($link);
?>