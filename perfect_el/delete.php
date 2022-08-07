<?php 

include 'con.php';

$id=$_GET['id'];
$q="DELETE FROM `task` WHERE id=$id";
mysqli_query($con,$q);
header('location:display.php');


?>