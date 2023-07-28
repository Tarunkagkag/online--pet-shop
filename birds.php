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
        <title>Pet Shop | Products</title>
         <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script type="text/javascript" src="bootstrap/js/jquery-3.5.0.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
         <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <link rel="stylesheet" href="css/style.css"/>
          <style>
            p{
                background-color:pink;
            }
          </style>
        
    </head>
    <body>
        <?php
        include 'includes/header.php';
        include 'includes/check-if-added.php';
        ?>
        
        <br><br><br><br><br>
        <div class="container">
            
            <div class="jumbotron" style="border-radius:100px; ">
                <h1>"No bird soars too high if he soars with his own wings."</h1>
                <!-- <p>We have the best Strawberry,Apples and Melons for you. No need to hunt around, we have all in one place.</p> -->
                
            </div>
             <!-- <?php //include "includes/db.php";  -->
        // $sql="SELECT * FROM `catgories`";
        // $result=mysqli_query($conn,$sql);
        // while($row=mysqli_fetch_assoc($result))
        // {
        //     $cat=$row['categories_name'];
        //     // $des=$row['categories_description'];
        //     $link=$row['link'];
        //     echo '<div class="col-md-4">
        //                 <div class="card" style="width: 18rem;">
        //                             <div class="card-body">
        //                                 <h5 class="card-title">'.$cat.'</h5>
        //                                     <p class="card-text">'.$des.'</p>
        //                                             <a href="'.$link.'" class="btn btn-primary">Explore</a>
        //                             </div>
        //                  </div>
        //              </div>';
        // }

        // ?>
            </div> -->
        </div>
        
                
                 <div class="container">
                    <div class="row text-center">
                  <div class="col-md-3 col-sm-6">
                      <div class=" ">
                           <a href="canary.php">          
                          <img src="img/download (1).jpg" alt="Responsive image" width="260px" height="210px" >
        </a>
                          <div class="caption">
                              <h3>Domestic Canary</h3>
                              <p>Price:Rs.5000.00</p>
                              <?php 
					
					            if (check_if_added_to_cart(49)) { 
					                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
				    	            } else {
                                             	?>
					                         <a href="cart-add.php?id=49" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
					            <?php
					             }
                                ?>
                             <!-- <button type="submit" class="btn btn-primary btn-block">Add to cart</button>-->
                          </div>
                      </div>
                  </div>
                  
                  
                  <div class="col-md-3 col-sm-6">
                      <div class=" ">
                        <a href="Budgerigar.php">
                          <img src="img/all-about-budgerigars.jpg" alt="Responsive image"  width="260px" height="210px" >
                        </a>
                          <div class="caption">
                              <h3>Budgerigar</h3>
                              <p>Price:Rs.6000.00</p>
                              <?php 
					
					if (check_if_added_to_cart(50)) { 
					echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
					} else {
                                	?>
					<a href="cart-add.php?id=50" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
					<?php
					}
                                ?>
                              <!--<button type="submit" class="btn btn-primary btn-block">Add to cart</button>-->
                          </div>
                      </div>
                  </div>
                  
                  
                   <div class="col-md-3 col-sm-6">
                      <div class=" ">
                        <a href="Paintedbunting.php">
                          <img src="img/75712701-1200px.jpg" alt="Responsive image"  width="260px" height="210px">
                          </a>
                          <div class="caption">
                              <h3>Painted bunting</h3>
                              <p>Price:Rs.6000.00</p>
                              <?php 
					
					if (check_if_added_to_cart(51)) { 
					echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
					} else {
                                	?>
					<a href="cart-add.php?id=51" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
					<?php
					}
                                ?>
                              <!--<button type="submit" class="btn btn-primary btn-block">Add to cart</button>-->
                          </div>
                      </div>
                  </div>
                  
                   <div class="col-md-3 col-sm-6">
                      <div class=" ">
                        <a href="Cockatiels.php">
                          <img src="img/cockatiels-as-pets-1236728-hero-78cbdaa2b96343a7bd3c11d4117fb931.jpg" alt="Responsive image"  width="260px" height="210px">
                          </a>
                          <div class="caption">
                              <h3>Cockatiels</h3>
                              <p>Price:Rs.8000.00</p>
                              <?php 
					
					if (check_if_added_to_cart(52)) { 
					echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
					} else {
                                	?>
					<a href="cart-add.php?id=52" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
					<?php
					}
                                ?>
                              <!--<button type="submit" class="btn btn-primary btn-block">Add to cart</button>-->
                          </div>
                      </div>
                  </div>
                 <p></p>
                  
                  
                   <div class="col-md-3 col-sm-6">
                      <div class=" ">
                        <br>
                        <a href="Monkparakeet.php">
                          <img src="img/71547631-480px.jpg" alt="Responsive image"  width="260px" height="210px">
                          </a>
                          <div class="caption">
                              <h3>Monk Parakeet</h3>
                              <p>Price:Rs.6000.00</p>
                              <?php 
					
					if (check_if_added_to_cart(53)) { 
					echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
					} else {
                                	?>
					<a href="cart-add.php?id=53" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
					<?php
					}
                                ?>
                              <!--<button type="submit" class="btn btn-primary btn-block">Add to cart</button>-->
                          </div>
                      </div>
                  </div>
                  
                  <div class="col-md-3 col-sm-6">
                      <div class=" ">
                      <br>
                      <a href="Parrot.php">
                          <img src="img/images (2).jpg" alt="Responsive image"  width="260px" height="210px"> 
                          </a>
                          <div class="caption"> 
                              <h3>Parrot</h3>
                              <p>Price:Rs.7000.00</p>
                              <?php 
					
					if (check_if_added_to_cart(54)) { 
					echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
					} else {
                                	?>
					<a href="cart-add.php?id=54" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
					<?php
					}
                                ?>
                              <!--<button type="submit" class="btn btn-primary btn-block">Add to cart</button>-->
                          </div>
                      </div>
                  </div>
                  
                  <div class="col-md-3 col-sm-6">
                      <div class=" ">
                      <br>
                      <a href="Senegalparrot.php">
                          <img src="img/senegal_parrots-1scaler.jpg" alt="Responsive image"  width="260px" height="210px">
                          </a>
                          <div class="caption">
                              <h3>Senegal Parrot</h3>
                              <p>Price:Rs.9000.00</p>
                              <?php 
					
					if (check_if_added_to_cart(55)) { 
					echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
					} else {
                                	?>
					<a href="cart-add.php?id=55" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
					<?php
					}
                                ?>
                             <!-- <button type="submit" class="btn btn-primary btn-block">Add to cart</button>-->
                          </div>
                      </div>
                  </div>
                  
                   
                  
                  <div class="col-md-3 col-sm-6">
                      <div class=" ">
                      <br>
                      <a href="Rosyfacedlovebird.php">
                          <img src="img/download (2).jpg" alt="Responsive image" id="imgs"  width="260px" height="210px">
                          </a>
                          <div class="caption">
                              <h3>Rosy Faced Lovebird</h3>
                              <p>Price:Rs.9000.00</p>
                              <?php 
					
					if (check_if_added_to_cart(57)) { 
					echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
					} else {
                                	?>
					<a href="cart-add.php?id=57" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
					<?php
					}
                                ?>
                             <!-- <button type="submit" class="btn btn-primary btn-block">Add to cart</button>-->
                          </div>
                      </div>
                  </div>
                  
                  <div class="col-md-3 col-sm-6">
                      <div class=" ">
                      <br>
                      <a href="Greyparrot.php">
                          <img src="img/Psittacus_erithacus_-perching_on_tray-8d.jpg" alt="Responsive image" width="260px" height="210px">
                          </a>
                          <div class="caption">
                              <h3>Grey Parrot</h3>
                              <p>Price:Rs.8000.00</p>
                              <?php 
					
					if (check_if_added_to_cart(58)) { 
					echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
					} else {
                                	?>
					<a href="cart-add.php?id=58" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
					<?php
					}
                                ?>
                              <!--<button type="submit" class="btn btn-primary btn-block">Add to cart</button>-->
                          </div>
                      </div>
                  </div>
                  

                  
                  
                  <div class="col-md-3 col-sm-6">
                      <div class=" ">
                      <br>
                      <a href="Pionusparrot.php">
                          <img src="img/Pionus-parrot.jpg" alt="Responsive image"  width="260px" height="210px">
                          </a>
                          <div class="caption">
                              <h3>Pionus Parrot</h3>
                              <p>Price:Rs.7000.00</p>
                              <?php 
					
					if (check_if_added_to_cart(59)) { 
					echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
					} else {
                                	?>
					<a href="cart-add.php?id=59" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
					<?php
					}
                                ?>
                              <!--  <button type="submit" class="btn btn-primary btn-block">Add to cart</button>-->
                          </div>
                      </div>
                  </div>
                  
                  <div class="col-md-3 col-sm-6">
                      <div class=" ">
                      <br>
                      <a href="Mourningdove.php">
                          <img src="img/1800.jpg" alt="Responsive image"  width="260px" height="210px">
                          </a>
                          <div class="caption">
                              <h3>Mourning Dove</h3>
                              <p>Price:Rs.8000.00</p>
                              <?php 
					
					if (check_if_added_to_cart(60)) { 
					echo '<a href="winter.php" class="btn btn-block btn-success" disabled>Added to cart</a>';
					} else {
                                	?>
					<a href="cart-add.php?id=60" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
					<?php
					}
                                ?>
                              <!--<button type="submit" class="btn btn-primary btn-block">Add to cart</button>-->
                          </div>
                      </div>
                      
                      
                      
                  </div>
                  
              </div>
             
          </div><br>
       <footer class="fo">
           <div class="container">
               <center>
                   <div><small>&copy;</small> Pet Shop | All Rights Reserved</div>
               </center>
           </div>
           
           
       </footer>
        
        
    </body>
</html>
