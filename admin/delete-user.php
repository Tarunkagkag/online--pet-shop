<?php
$con = mysqli_connect("localhost", "root", "", "storesss") or die(mysqli_error($con));
if(isset($_SESSION)){
  session_start();
}

if (isset($_POST['submit'])) {
    $id = $_POST['id'];

    
    $query = "DELETE FROM `users` WHERE id='$id' ";
    $res = mysqli_query($con, $query) or die($mysqli_error($con));
}
?>
