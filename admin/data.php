<html>
    <head>
        <style>

            .button {
  background-color: red;
  border: none;
  color: white;
  padding: 10px 32px;
  text-align: center;
  font-size: 16px;
  margin: 4px 2px;
  transition-duration: 0.9s;
  cursor: pointer;
}
.button5 {
  background-color: white;
  color: Yellow;
  border: 2px dashed green;
}

.button5:hover {
  background-color: Blue;
  color: white;
}
body{
  background:  url('h.jpg');
  background-size:  100%;
  background-repeat: no-repeat; 
            }
        </style>
    </head>
    <body>
<center>
    <div class="container">
        <form action="" method="POST">
            <table border="2">
                <tr>
                    <th>Name</th>
                    <th>Mode of Payment</th>
                </tr>
                <button class="button button5"><a href="index.html">Back</a></button>
        </form> 
<?php
$con=mysqli_connect('localhost','root','');
$db=mysqli_select_db($con,'storesss');
    $query="SELECT * FROM `billing`";
    $query_run=mysqli_query($con,$query);

   while($row=mysqli_fetch_array($query_run))
    {
        ?>
        <tr>
            <td><?php   echo $row['B_name'];?></td>
            <td><?php   echo $row['B-type'];?></td>
            
    </tr>

        <?php
    }
    
?>
</center>
</body>
</html>
