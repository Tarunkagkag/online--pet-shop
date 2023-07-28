<?php
include "db.php";
'<a href="update.html">Click here</a>';
$a=$_POST['id'];
$c=$_POST['Image'];
$b=$_POST['name'];
$e=$_POST['link'];
$sql=" INSERT INTO `catgories`(`categories_id`,`Image` ,`categories_name` ,`link`) VALUES ('$a','$c','$b','$e')";
 $result=mysqli_query($conn,$sql);
?>