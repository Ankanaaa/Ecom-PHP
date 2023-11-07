<?php

$Id=$_GET['ID'];
$conn=mysqli_connect('localhost','root','','ecommerce');
mysqli_query($conn,"DELETE FROM `tbluser` WHERE Id=$Id");
header("location:user.php");

?>