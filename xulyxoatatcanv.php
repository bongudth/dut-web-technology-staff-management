<?php
    $link = new mysqli("localhost", "root", "", "dulieu", "3307") or die("Can't connect to Database!");
    
    if (isset($_POST['delete'])) {
        $checkbox = $_POST['checkbox'];
        for ($i = 0; $i < count($checkbox); $i++) {
            $idnv = $checkbox[$i];
            $sql = "delete from nhanvien where idnv = '$idnv'";
            $result = mysqli_query($link, $sql);
        }
        if ($result) {
            header("Location: xoatatcanv.php");
        }
    }
    
    mysqli_close($link);
?>