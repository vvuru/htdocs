<?php
    include_once "db_user.php";
    session_start();

    $uid=$_POST["uid"];
    $upw=$_POST["upw"];
    
    $param=[
        "uid"=>$uid
    ];

    $result=sel_user($param);
    if(empty($result))
    {
        echo "No Corresponding ID";
        die;
    }

    if($upw===$result["upw"]) {
        $_SESSION["login_user"]=$result;
        header("location:list.php");
    } else {
        header("location:login.php");
    }

   