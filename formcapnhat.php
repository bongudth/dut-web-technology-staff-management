<?php
    $idpb = $_REQUEST['idpb'];

    $link = new mysqli("localhost", "root", "", "dulieu", "3307") or die("Can't connect to Database!");
    $sql = "select * from phongban where idpb = $idpb";

    $result = mysqli_query($link, $sql);
    $row = mysqli_fetch_array($result, MYSQLI_BOTH);
?>

<!DOCTYPE html>
<html lang="en">
    <body>
        <form action="xulycapnhat.php?idpb=<?php echo $row['idpb']; ?>" method="post">
            <h1 class="title">Edit department</h1>
            <div class="label">Department ID</div>
            <input class="input" type="text" name="idpb" readonly value="<?php echo $row['idpb']; ?>">
            <div class="label">Department name</div>
            <input class="input" type="text" name="tenpb" value="<?php echo $row['tenpb']; ?>">
            <div class="label">Mô tả</div>
            <textarea name="mota"><?php echo $row['mota']; ?></textarea>
            <div class="button-container">
                <input class="button" type="submit" value="Save">
                <input class="button" type="reset" value="Reset">
            </div>
        </form>
    </body>

    <style>
        body {
          background-color: #FFF3F6;
          color: #F05E7F;
          height: 100vh;
          font-family: Arial, Helvetica, sans-serif;
          display: flex;
          justify-content: center;
          align-items: center;
          margin: 0;
        }

        form {
          background-color: #FCE1E4;
          width: 250px;
          text-align: center;
          border: 1px solid #F05E7F;
          border-radius: 4px;
          box-shadow: #FCE1E4 0px 1px 2px 0px, #FCE1E4 0px 1px 3px 1px;
          padding: 20px;
        }

        .title {
          font-weight: bold;
        }

        .label {
          text-align: left;
        }

        .input {
          background-color: transparent;
          color: #6F595B;
          width: 100%;
          outline: none;
          border: none;
          border-bottom: 1px solid #F05E7F;
          padding: 5px;
          margin-bottom: 20px;
        }

        textarea {
          background-color: #FFFFFF;
          color: #6F595B;
            width: -webkit-fill-available;
          border: 1px solid #F05E7F;
          padding: 5px;
          margin-top: 10px;
          margin-bottom: 20px;
        }

        .button-container {
          display: flex;
          justify-content: center;
        }

        .button {
          background-color: #F05E7F;
          color: #FFF3F6;
          font-size: small;
          text-decoration: none;
          border: none;
          border-radius: 4px;
          box-shadow: #FCE1E4 0px 1px 2px 0px, #FCE1E4 0px 1px 3px 1px;
          cursor: pointer;
          margin: auto 2px;
          padding: 5px;
        }
    </style>
</html>