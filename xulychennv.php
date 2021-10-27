<?php
    $link = new mysqli("localhost", "root", "", "dulieu", "3307") or die("Can't connect to Database!");

	$hoten = $_POST['hoten'];
	$idpb = $_POST['idpb'];
	$diachi = $_POST['diachi'];

	$sql = "insert into nhanvien values(NULL, '$hoten', $idpb, '$diachi')";
	$result = mysqli_query($link, $sql);

	header("Location: xemthongtinnv.php");

	mysqli_free_result($result);
	mysqli_close($link);
?>