<?php
include_once 'db.php';

function ins_board(&$param)
{
    $title = $param["title"];
    $ctnt = $param["ctnt"];
    $i_user = $param["i_user"];

    $conn = get_conn();
    $sql = "INSERT INTO t_board (title, ctnt, i_user) values ('$title','$ctnt', '$i_user')";

    $result = mysqli_query($conn, $sql);
    mysqli_close($conn);
    return $result;
}

function sel_board_list()
{
    $conn = get_conn();
    $sql =
        "SELECT A.i_board, A.title, A.created_at, B.nm
        FROM t_board A 
        INNER JOIN t_user B 
        ON A.i_user = B.i_user 
        ORDER BY i_board DESC";

    $result = mysqli_query($conn, $sql);
    mysqli_close($conn);
    return $result;
}

// function find_name(&$i_user)
// {
//     $conn = get_conn();
//     $sql = "SELECT nm FROM t_user WHERE i_user=$i_user";

//     $result = mysqli_query($conn, $sql);
//     mysqli_close($conn);
//     return mysqli_fetch_assoc($result);
// }

function sel_board($param)
{
    $i_board = $param['i_board'];

    $conn = get_conn();
    $sql = "SELECT A.i_board, A.ctnt, A.title, A.created_at, A.updated_at, B.nm, B.i_user
    FROM t_board A 
    INNER JOIN t_user B 
    ON A.i_user = B.i_user
    WHERE A.i_board=$i_board";

    $result = mysqli_query($conn, $sql);
    mysqli_close($conn);
    return $result;
}
