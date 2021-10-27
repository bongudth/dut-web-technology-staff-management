<?php
    $idpb = $_REQUEST["idpb"];

    $link = new mysqli("localhost", "root", "", "dulieu", "3307") or die("Can't connect to Database!");
    $sql = "select * from nhanvien where idpb = $idpb";
    $result = mysqli_query($link, $sql);
?>

<!DOCTYPE html>
<html lang="en">
    <body>
        <table>
            <caption>Staff list</caption>
            <tr>
                <th>Staff ID</th>
                <th>Name</th>
                <th>Department ID</th>
                <th>Address</th>
            </tr>
            <?php
                while ($row = mysqli_fetch_array($result)) {
                    echo "<tr>
                            <td class='center'>" . $row["idnv"] . "</td>
                            <td>" . $row["hoten"] . "</td>
                            <td class='center'>" . $row["idpb"] . "</td>
                            <td>" . $row["diachi"] . "</td>
                        </tr>";
                }
            ?>
        </table>
        <a class="button" href="./xemthongtinpb.php">Return</a>
    </body>

    <style>
        body {
            color: #F05E7F;
            font-family: Arial, Helvetica, sans-serif;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }

        table {
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