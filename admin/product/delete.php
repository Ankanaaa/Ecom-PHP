<?php

$Id=$_GET['ID'];
include 'Config.php';
mysqli_query($conn,"DELETE FROM `tblproduct` WHERE id=$Id");
header("location:index.php");

?>