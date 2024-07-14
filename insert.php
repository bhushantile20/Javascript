<?php
     include 'dbconnect.php';
    
$name=$_POST['stname'];
$email =$_POST['stemail'];
$mobile=$_POST['stmobile'];

 $sql="insert into student(name,email,mobile) values('$name','$email','$mobile')";

$result=mysqli_query($con,$sql);
if(!$result)
   die(mysqli_error($con));
else 
header("location:index.php");


?>