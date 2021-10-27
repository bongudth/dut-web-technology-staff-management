<?php
    $link = new mysqli("localhost", "root", "", "dulieu", "3307") or die("Can't connect to Database!");
    $sql = "select * from phongban";
    $result = mysqli_query($link, $sql);
?>

<!DOCTYPE html>
<html lang="en">
    <body>
        <table>
            <caption>Department list</caption>
            <tr>
                <th>Department ID</th>
                <th>Name</th>
                <th>Description</th>
                <th>Staff list</th>
            </tr>
            <?php
                while ($row = mysqli_fetch_array($result)) {
                    $href = "./xemthongtinnvpb.php?idpb=" . $row["idpb"] . "";
                    echo "<tr>
                            <td class='center'>" . $row["idpb"] . "</td>
                            <td>" . $row["tenpb"] . "</td>
                            <td>" . $row["mota"] . "</td>
                            <td class='center'><a href=$href>Staff list</a></td>
                        </tr>";
                }
            ?>
        </table>
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
    </style>
</html>

<?php
    mysqli_free_result($result);
    mysqli_close($link);
?>