<?php
    include_once "db.php";

    $i_board=$_GET['i_board'];
    $sql="SELECT title,ctnt FROM t_board WHERE i_board=$i_board";
    $conn=get_conn();
    $result=mysqli_query($conn,$sql);
    mysqli_close($conn);

    if($row=mysqli_fetch_assoc($result))
    {
        $title=$row['title'];
        $ctnt=$row['ctnt'];
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>modify</title>
</head>
<body>
    <h1>modify</h1>
    <form action="mod_proc.php" method="post">
        <input type="hidden" name="i_board" value="<?=$i_board?>">
        <div><input type="text" name="title" placeholder="title" value="<?=$title?>"></div>
        <div><textarea name="ctnt" placeholder="ctnt"><?=$ctnt?></textarea></div>
        <div>
            <input type="submit" value="Modify">
            <input type="reset" value="Reset">
        </div>
    </form>
</body>
</html>