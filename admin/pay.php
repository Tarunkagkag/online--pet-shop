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
  color: blue;
  border: 2px solid red;
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
                 <th>Full Name</th>
                 <th>Email</th>
                 <th>Referal Number</th>
                </tr>
                <button class="button button5"><a href="index.html">Back</a></button>
        </form> 
<?php
$con=mysqli_connect('localhost','root','');
$db=mysqli_select_db($con,'storesss');
    $query="SELECT * FROM `payment`";
    $query_run=mysqli_query($con,$query);

   while($row=mysqli_fetch_array($query_run))
    {
        ?>
        <tr>
            <td><?php   echo $row['Full Name'];?></td>
            <td><?php   echo $row['Email'];?></td>
            <td><?php   echo $row['Referal Number'];?></td>
           
    </tr>

        <?php
    }
    
?>
</center>
</body>
</html>