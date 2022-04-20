<?php
    include_once "db.php";

    $conn=get_conn();
    $sql="SELECT i_board,title,create_at FROM t_board ORDER BY i_board DESC";
    $result=mysqli_query($conn,$sql);
    mysqli_close($conn);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>list</title>
</head>
<body>
    <h1>list</h1>
    <a href="write.php">
        <button>write</button>
    </a>    
    <table>
        <tr>
            <th>Num</th>
            <th>Title</th>
            <th>Date</th>
        </tr>
        <?php
            while($row=mysqli_fetch_assoc($result))
            {
                $i_board=$row['i_board'];
                $title=$row['title'];
                $create_at=$row['create_at'];
                echo "<tr>";
                echo "<td>${i_board}</td>";
                echo "<td><a href='detail.php?i_board=${i_board}'>${title}</a></td>";
                echo "<td>${create_at}</td>";
                echo "</tr>";
            }
        ?>
    </table>
</body>
</html>