<?php
$i=$_POST['id'];
include "db.php";
$sql="DELETE FROM `catgories` WHERE `catgories`.`categories_id` = $i";
$result=mysqli_query($conn,$sql);

?>