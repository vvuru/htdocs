<?php
    include_once "db.php";

    $i_board=$_GET['i_board'];
    $sql="SELECT * FROM t_board WHERE i_board=$i_board";

    $conn=get_conn();
    $result=mysqli_query($conn,$sql);
    mysqli_close($conn);

    if($row=mysqli_fetch_assoc($result))
    {
        $title=$row['title'];
        $ctnt=$row['ctnt'];
        $create_at=$row['create_at'];
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$title?></title>
</head>
<body>
    <a href="list.php"><button>List</button></a>
    <a href="del_proc.php?i_board=<?=$i_board?>"><button>Delete</button></a>
    <a href="mod.php?i_board=<?=$i_board?>"><button>Modify</button></a>
    <div>Title: <?=$title?></div>
    <div>Create_at: <?=$create_at?></div>
    <div>Content: <?=$ctnt?></div>
</body>
</html>