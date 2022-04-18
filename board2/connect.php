<?php
    include_once "db.php";

    $conn=get_conn();
    $sql=
    "
    INSERT INTO t_board
    (title,ctnt)
    VALUES
    ('test','content')
    ";

    mysqli_query($conn,$sql);
    mysqli_close($conn);
    
?>