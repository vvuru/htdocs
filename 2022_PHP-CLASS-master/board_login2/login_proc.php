<?php
    include_once "db_user.php";
    session_start();

    $uid=$_POST["uid"];
    $upw=$_POST["upw"];

    echo "uid: ",$uid,"<br>";
    echo "upw: ",$upw,"<br>";

    $param=
    [
        "uid"=>$uid,
    ];

    $result=sel_user($param);
    if(empty($result))
    {
        echo "No Corresponding ID";
        die;
    }

    echo "i_user: ",$result["i_user"],"<br>";
    echo "pw: ",$result["upw"],"<br>";

    if($upw===$result["upw"])
    {
        $_SESSION["login_user"]=$result;
        header("location:list.php");
    }
    else
    {
        header("location:login.php");
    }





