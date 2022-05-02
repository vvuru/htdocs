<?php
    include_once "db.php";

    function ins_board(&$param)
    {
        $i_user=$param["i_user"];
        $title=$param["title"];
        $ctnt=$param["ctnt"];

        $sql="INSERT INTO t_board3 (title,ctnt,i_user) VALUES ('$title','$ctnt','$i_user')";

        $conn=get_conn();
        $result=mysqli_query($conn,$sql);
        mysqli_close($conn);
        return $result;
    }

    function sel_paging_count(&$param)
    {
        $row_count=$param["row_count"];
        $sql="SELECT CEIL(COUNT(i_board)/$row_count) AS cnt FROM t_board3";

        $conn=get_conn();
        $result=mysqli_query($conn,$sql);
        mysqli_close($conn);
        $row=mysqli_fetch_assoc($result);
        return $row["cnt"];
    }

    function sel_board_list(&$param)
    {
        $start_idx=$param["start_idx"];
        $row_count=$param["row_count"];  

        $sql="SELECT A.i_board,A.title,A.created_at,B.nm FROM t_board3 A INNER JOIN t_user3 B
        ON A.i_user=B.i_user ORDER BY A.i_board DESC LIMIT $start_idx,$row_count";

        $conn=get_conn();
        $result=mysqli_query($conn,$sql);
        mysqli_close($conn);
        return $result;
    }

    function sel_board(&$param)
    {
        $i_board=$param["i_board"];
        $sql="SELECT A.title, A.ctnt, A.created_at, B.i_user, B.nm FROM t_board3 A INNER JOIN t_user3 B
        ON A.i_user=B.i_user WHERE A.i_board=$i_board";
        
        $conn = get_conn();
        $result = mysqli_query($conn, $sql);
        mysqli_close($conn);        
        return mysqli_fetch_assoc($result);
    }

    function sel_next_board(&$param)
    {
        $i_board=$param["i_board"];

        $sql="SELECT i_board FROM t_board3 WHERE i_board>$i_board ORDER BY i_board LIMIT 1";

        $conn = get_conn();
        $result = mysqli_query($conn, $sql);
        mysqli_close($conn);  
        $row=mysqli_fetch_assoc($result);
        if($row)
        {
            return $row["i_board"];
        }
        return 0;
    }

    function sel_prev_board(&$param)
    {
        $i_board=$param["i_board"];

        $sql="SELECT i_board FROM t_board3 WHERE i_board<$i_board ORDER BY i_board DESC LIMIT 1";

        $conn = get_conn();
        $result = mysqli_query($conn, $sql);
        mysqli_close($conn);  
        $row=mysqli_fetch_assoc($result);
        if($row)
        {
            return $row["i_board"];
        }
        return 0;
    }

    function upd_board(&$param)
    {
        $i_board=$param["i_board"];
        $title=$param["title"];
        $ctnt=$param["ctnt"];
        $i_user=$param["i_user"];

        $sql="UPDATE t_board3 SET title='$title',ctnt='$ctnt',updated_at=now()
        WHERE i_board=$i_board AND i_user=$i_user";

        $conn = get_conn();
        $result = mysqli_query($conn, $sql);
        mysqli_close($conn);
        return $result;

    }
    
    function del_board(&$param)
    {
        $i_board=$param["i_board"];
        $i_user=$param["i_user"];

        $sql="DELETE FROM t_board3 WHERE i_board=$i_board AND i_user=$i_user";

        $conn = get_conn();
        $result = mysqli_query($conn, $sql);
        mysqli_close($conn);
        return $result;

    }
