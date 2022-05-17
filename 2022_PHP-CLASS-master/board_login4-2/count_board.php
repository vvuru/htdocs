<?php
include_once "db.php";

$conn=get_conn();

$YY=date("Y");
$MM=date("m");
$DD=date("d");

$dat=$YY."-".$MM."-".$DD;
$sql="SELECT * FROM count_board WHERE redate='$dat'";
$result=mysqli_query($conn,$sql);
mysqli_close($conn);
$list=mysqli_num_rows($result);

if(!$list)
{
    $count=0;
}
else
{
    $row=mysqli_fetch_assoc($result);
    $count=$row['count'];
}

if($count===0)
{
    $count++;
    $sql="INSERT INTO count_board VALUES ($count,'$dat')";
}
else
{
    $count++;
    $sql="UPDATE count_board SET count=$count WHERE redate='$dat'";
}

mysqli_query($conn,$sql);

//total hit
$total_query="SELECT SUM(count) FROM count_board ";
$total_count=mysqli_fetch_array(mysqli_query($conn,$total_query))[0];
mysqli_close($conn);

echo "today: ".$count."<br>";
echo ""
