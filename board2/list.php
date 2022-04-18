<?php
    include_once "db.php";

    $conn=get_conn();
    $sql=
    "
        SELECT i_board,title,create_at
        FROM t_board
        ORDER BY i_board DESC
    ";
    $result=mysqli_query($conn,$sql);
    mysqli_close($conn);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List</title>
</head>
<body>
    <h1>List</h1>
    <a href="write.php"><button>Write</button></a>
    <table>
        <tr>
            <th>number</th>
            <th>title</th>
            <th>date</th>
        </tr>
        <?php
            while($row=mysqli_fetch_assoc($result))
            {
                $i_board=$row['i_board'];
                $title=$row['title'];
                $create_at=$row['create_at'];
                print "<tr>";
                print "<td>${i_board}</td>";
                print "<td><a href='detail.php?i_board=${i_board}'>${title}</a></td>";
                print "<td>${create_at}</td>";
                print "</tr>";
            }
        ?>
    </table>
</body>
</html>