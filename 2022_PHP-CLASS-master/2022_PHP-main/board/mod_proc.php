<?php
    include "db.php";

    // 수정 완료 후 detail.php 로 이동
    $i_board = $_POST["i_board"];
    $title = $_POST["title"];
    $ctnt = $_POST["ctnt"];

    $sql = "
        UPDATE t_board
        SET title = '$title'
        , ctnt = '$ctnt'
        WHERE i_board = $i_board
    ";

    $conn = get_conn();
    $result = mysqli_query($conn, $sql);
    mysqli_close($conn);

    header("Location: detail.php?i_board=$i_board");
?>