
<html>
<head>
      
        
      <meta charset="UTF-8">
      <title>Fruit Store</title>
       <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
      <script type="text/javascript" src="bootstrap/js/jquery-3.5.0.min.js"></script>
      <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/style.css"/>

  </head>
<body>
    <?php include "db.php";?>
<div class="container">
    <div class="text-center">
        <h2>
    Welcome to categories
</h2>
    <div class="row">
        <?php 
        $sql="SELECT * FROM `catgories`";
        $result=mysqli_query($conn,$sql);
        while($row=mysqli_fetch_assoc($result))
        {
            $cat=$row['categories_name'];
            $des=$row['categories_description'];
            $link=$row['link'];
            echo '<div class="col-md-4">
                        <div class="card" style="width: 18rem;">
                                    <div class="card-body">
                                        <h5 class="card-title">'. $cat .'</h5>
                                            <p class="card-text">'.$des.'</p>
                                                    <a href="'.$link.'" class="btn btn-primary">Explore</a>
                                    </div>
                         </div>
                     </div>';
        }
        ?>
            <a href="delete.html" class="btn btn-primary">DELETE</a>
        <a href="update.html" class="btn btn-primary">ADD NEW Category</a>


</div>
</body>
</html>