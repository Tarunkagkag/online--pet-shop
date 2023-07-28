<?php
include "includes/common.php";

if (!isset($_SESSION['email'])) {
    header('location: index.php');
}
?>
<!DOCTYPE html>
<!--

-->
<html>
    <head>
               
        <meta charset="UTF-8">
        <title>Fruit Store | Products</title>
         <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script type="text/javascript" src="bootstrap/js/jquery-3.5.0.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
         <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <link rel="stylesheet" href="css/style.css"/>
    </head>
    <body>
        <?php
        include 'includes/header.php';
        include 'includes/check-if-added.php';
        ?>
        
        <br><br><br><br><br>
        <div class="container">
            
            <div class="jumbotron">
                <h1>Welcome to our Fruit Store!</h1>
                <p>We have the best Strawberry,Apples and Melons for you. No need to hunt around, we have all in one place.</p>
                
            </div>
            <?php include "includes/db.php";
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
                                        <h5 class="card-title">'.$cat.'</h5>
                                            <p class="card-text">'.$des.'</p>
                                                    <a href="'.$link.'" class="btn btn-primary">Explore</a>
                                    </div>
                         </div>
                     </div>';
        }

        ?>
            </div>
        </div>
        
                
                 <div class="container">
                    <div class="row text-center">
                  <div class="col-md-3 col-sm-6">
                      <div class=" ">
                          <img src="img/400.jpg" alt="Responsive image" title="Watermelon is the best fruit during all times" width="230px" height="210px">
                          <div class="caption">
                              <h3>Apricot</h3>
                              <p>Price:Rs.80.00</p>
                              <?php 
					
					            if (check_if_added_to_cart(400)) { 
					                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
				    	            } else {
                                             	?>
					                         <a href="cart-add.php?id=400" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
					            <?php
					             }
                                ?>
                             <!-- <button type="submit" class="btn btn-primary btn-block">Add to cart</button>-->
                          </div>
                      </div>
                  </div>
                  
                  
                  <div class="col-md-3 col-sm-6">
                      <div class=" ">
                          <img src="img/401.jpg" alt="Responsive image" title="Watermelon is the best fruit during all times" width="230px" height="210px">
                          <div class="caption">
                              <h3>Fig</h3>
                              <p>Price:Rs.75.00</p>
                              <?php 
					
					if (check_if_added_to_cart(401)) { 
					echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
					} else {
                                	?>
					<a href="cart-add.php?id=401" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
					<?php
					}
                                ?>
                              <!--<button type="submit" class="btn btn-primary btn-block">Add to cart</button>-->
                          </div>
                      </div>
                  </div>
                  
                  
                   <div class="col-md-3 col-sm-6">
                      <div class=" ">
                          <img src="img/402.jpg" alt="Responsive image" title="Watermelon is the best fruit during all times" width="230px" height="210px">
                          <div class="caption">
                              <h3>Sitaphal</h3>
                              <p>Price:Rs.30.00</p>
                              <?php 
					
					if (check_if_added_to_cart(402)) { 
					echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
					} else {
                                	?>
					<a href="cart-add.php?id=402" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
					<?php
					}
                                ?>
                              <!--<button type="submit" class="btn btn-primary btn-block">Add to cart</button>-->
                          </div>
                      </div>
                  </div>
                  
                  
                   <div class="col-md-3 col-sm-6">
                      <div class=" ">
                          <img src="img/404.jpg" alt="Responsive image" title="Watermelon is the best fruit during all times" width="230px" height="210px">
                          <div class="caption">
                              <h3>Berry</h3>
                              <p>Price:Rs.100.00</p>
                              <?php 
					
					if (check_if_added_to_cart(403)) { 
					echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
					} else {
                                	?>
					<a href="cart-add.php?id=403" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
					<?php
					}
                                ?>
                              <!--<button type="submit" class="btn btn-primary btn-block">Add to cart</button>-->
                          </div>
                      </div>
                  </div>
             
          </div><br>
       <footer class="fo">
           <div class="container">
               <center>
                   <p><small>&copy;</small> Fruit Store | All Rights Reserved</p>
               </center>
           </div>
           
           
       </footer>
        
        
    </body>
</html>
