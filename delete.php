<?php
include 'dbconnect.php';

$id=$_REQUEST['deleteid'];


$sql="delete from student where id=$id";
$result=mysqli_query($con,$sql);

if(!$result)
{
    die(mysqli_error($con));
}
else{
    header("location:index.php");
}
?>
