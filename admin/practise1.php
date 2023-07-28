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
.button3 {
  background-color: white;
  color: green;
  border: 2px dotted blue;
}

.button3:hover {
  background-color: green;
  color: yellow;
}
.button2{
  background-color: white;
  color: red;
  border: 2px dotted gray;
}

.button2:hover {
  background-color: red;
  color: Blue;
}
.button5 {
  background-color: white;
  color: blue;
  border: 2px solid red;
}

.button5:hover {
  background-color: Blue;
  color: Blue;
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
        <form action="" method="POST">
            <table border="2">
                <tr>
                <th>Categories id</th>
               <th>Categories name</th>
            
               <th>Categories Link</th>
                </tr>
                <button class="button button5"><a href="index.html">Back</a></button>
        </form>
        <?php
$con=mysqli_connect('localhost','root','');
$db=mysqli_select_db($con,'storesss');
    $query="SELECT * FROM `catgories`";
    $query_run=mysqli_query($con,$query);

   while($row=mysqli_fetch_array($query_run))
    {
        ?>
        <tr>
            <td><?php   echo $row['categories_id'];?></td>
            <td><?php   echo $row['categories_name'];?></td>
            <td><?php   echo $row['link'];?></td>
    </tr>

        <?php
    }
    

?>
    </div>
    <button class="button button3"><a href="update.html">ADD</a></button>
    <button class="button button2"><a href="delete.html">DELETE</a></button>
</center>
    </body>
</html>