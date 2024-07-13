<?php
$host="localhost";
$use="root";
$pwd="";
$dbname="college";


$con= new mysqli($host,$usr,$pwd,$dbname);
if(!$con)
die(mysqli_error($con));
