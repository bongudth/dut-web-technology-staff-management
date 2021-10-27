<!DOCTYPE html>
<html>
    <body>
        <form action="xulytimkiem.php" id="#form" method="post" name="#form">
            <h1 class="title">Search staff</h1>
            <div class="label">Select property</div>
            <select name="properties">
                <option value="idnv">Staff ID</option>
                <option value="hoten">Name</option>
                <option value="idpb">Department ID</option>
                <option value="diachi">Address</option>
            </select>
            <div class="label">Input value</div>
            <input class="input" name="value" type='text'>
            <input class="button" name="submit" type='submit' value='Submit'>
            <?php
                if (isset($_POST['submit'])) {
                    $key = $_POST['properties'];
                    $value = $_POST['value'];
                    if (!empty($input)) {
                        header("Location: xulytimkiem.php?key=".$key."&value=".$value);
                    } else {
                        header("Location: timkiem.php");
                        echo "Please fill at least one field!";
                    }
                }
            ?>
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

    select {
      background-color: #FFFFFF;
      color: #6F595B;
      width: 100%;
      border: 1px solid #F05E7F;
      padding: 5px;
      margin-top: 10px;
      margin-bottom: 20px;
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