<?php
    $link = new mysqli("localhost", "root", "", "dulieu", "3307") or die("Can't connect to Database!");
    $sql = "select * from nhanvien";
    $result = mysqli_query($link, $sql);
?>

<!DOCTYPE html>
<html lang="en">
    <body>
        <form action="xulyxoatatcanv.php" method="post">
            <table>
                <caption>Staff list</caption>
                <tr>
                    <th>Staff ID</th>
                    <th>Name</th>
                    <th>Department ID</th>
                    <th>Address</th>
                    <th><input type="checkbox" name="" id="checkAll" onclick="toggle(this)">Select all</th>
                </tr>
                <?php
                    while ($row = mysqli_fetch_array($result)) {
                    ?>
                        <tr>
                            <td class='center'><?php echo $row["idnv"]; ?></td>
                            <td><?php echo $row["hoten"]; ?></td>
                            <td class='center'><?php echo $row["idpb"]; ?></td>
                            <td><?php echo $row["diachi"]; ?></td>
                            <td class='center'><input type='checkbox' name='checkbox[]' class="checkItem" value='<?php echo $row['idnv']; ?>'></td>
                        </tr>
                    <?php
                    }
                ?>
            </table>
            <div class="button-container">
                <input class="button" type="submit" name="delete" value="Delete all selected staffs" onclick="return confirm('Are you sure?')" />
            </div>
        </form>

        <script>
            function toggle(source) {
                checkboxes = document.getElementsByClassName('checkItem');
                for (var i = 0, n = checkboxes.length; i < n; i++) {
                    checkboxes[i].checked = source.checked;
                }
            }
        </script>
    </body>

    <style>
        body {
            color: #F05E7F;
            font-family: Arial, Helvetica, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }

        form, table {
            width: 100%;
        }

        caption {
            font-size: large;
            font-weight: bold;
            margin-bottom: 20px;
        }

        th, td {
            border-bottom: 1px solid #F05E7F;
        }

        th {
            background-color: #FCE1E4;
            padding: 5px;
        }

        td.center {
            text-align: center;
            padding: 5px;
        }

        tr:hover {
            background-color: #FFFFFF;
        }

        a {
            color: #F05E7F;
            text-decoration: none;
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
          margin-top: 20px;
          padding: 5px;
        }
    </style>
</html>

<?php
    mysqli_free_result($result);
    mysqli_close($link);
?>