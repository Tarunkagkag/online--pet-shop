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
    </head>
    <style>
body {
  background-color: #333;
  
  
}
p{
                background-color:pink;
            }
h3{
    color:white;
}
</style>
    <body>
        <?php
        include 'includes/header.php';
        include 'includes/check-if-added.php';
        ?>

        <br><br><br><br><br>
        <div class="container">
            
             
                                
                            
                <a href="accessories.php"><center><img src="img/dierbenodigdheden-banner-bulbby-en.jpg" alt="Responsive image" width=1160px" height="260px" style="border: 2px solid black; cursor:pointer" >
                </center>
                </a>
              
                
                
                
        

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
        <br><br>
                
                 <div class="container">
                    <div class="row text-center">
                  <div class="col-md-3 col-sm-6">
                      <div class=" ">
                      <a href="img1.php">  
                                         
                          <img src="img/istockphoto-151547558-612x612.jpg" alt="Responsive image" width="260px" height="210px" >
        </a>
                          <div class="caption">
                              <h3>Abyssinian</h3>
                              <p>Price:Rs.4500.00</p>
                              <?php 
					
					            if (check_if_added_to_cart(25)) { 
					                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
				    	            } else {
                                             	?>
					                         <a href="cart-add.php?id=25" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
					            <?php
					             }
                                ?>
                             <!-- <button type="submit" class="btn btn-primary btn-block">Add to cart</button>-->
                          </div>
                      </div>
                  </div>
                  
                  
                  <div class="col-md-3 col-sm-6">
                      <div class=" ">
                      <a href="img2.php">
                          <img src="img/Aegean-cat-from-the-Greek-islands-24.jpg" alt="Responsive image"  width="260px" height="210px" >
                                </a>   
                          <div class="caption">
                              <h3>Aegean </h3>
                              <p>Price:Rs.5000.00</p>
                              <?php 
					
					if (check_if_added_to_cart(26)) { 
					echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
					} else {
                                	?>
					<a href="cart-add.php?id=26" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
					<?php
					}
                                ?>
                              <!--<button type="submit" class="btn btn-primary btn-block">Add to cart</button>-->
                          </div>
                      </div>
                  </div>
                  
                  
                   <div class="col-md-3 col-sm-6">
                      <div class=" ">
                      <a href="img3.php">
                          <img src="img/image (1).jpg" alt="Responsive image"  width="260px" height="210px">
                                </a>
                          <div class="caption">
                              <h3>American Bobtail</h3>
                              <p>Price:Rs.6000.00</p>
                              <?php 
					
					if (check_if_added_to_cart(27)) { 
					echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
					} else {
                                	?>
					<a href="cart-add.php?id=27" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
					<?php
					}
                                ?>
                              <!--<button type="submit" class="btn btn-primary btn-block">Add to cart</button>-->
                          </div>
                      </div>
                  </div>
                  
                   <div class="col-md-3 col-sm-6">
                      <div class=" ">
                      <a href="img4.php">
                          <img src="img/American-Curl-AP-1LHCGX-645sm3614.jpg" alt="Responsive image"  width="260px" height="210px">
                                </a>
                          <div class="caption">
                              <h3>American Curl</h3>
                              <p>Price:Rs.6000.00</p>
                              <?php 
					
					if (check_if_added_to_cart(28)) { 
					echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
					} else {
                                	?>
					<a href="cart-add.php?id=28" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
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
                        <a href="img5.php">
                          <img src="img/download.jpg" alt="Responsive image"  width="260px" height="210px">
                                </a>
                          <div class="caption">
                              <h3>American Ringtail</h3>
                              <p>Price:Rs.7000.00</p>
                              <?php 
					
					if (check_if_added_to_cart(29)) { 
					echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
					} else {
                                	?>
					<a href="cart-add.php?id=29" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
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
                      <a href="American Shorthair.php">
                          <img src="img/image (2).jpg" alt="Responsive image"  width="260px" height="210px">
                                </a> 
                          <div class="caption"> 
                              <h3>American Shorthair</h3>
                              <p>Price:Rs.7000.00</p>
                              <?php 
					
					if (check_if_added_to_cart(30)) { 
					echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
					} else {
                                	?>
					<a href="cart-add.php?id=30" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
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
                      <a href="American Wirehair.php">
                          <img src="img/image (3).jpg" alt="Responsive image"  width="260px" height="210px">
                                </a>
                          <div class="caption">
                              <h3>American Wirehair</h3>
                              <p>Price:Rs.9000.00</p>
                              <?php 
					
					if (check_if_added_to_cart(31)) { 
					echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
					} else {
                                	?>
					<a href="cart-add.php?id=31" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
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
                        <a href="Guavav Aphrodite Giant.php">
                          <img src="img/2560px-Aphrodite's_Giant.jpg" alt="Responsive image"  width="260px" height="210px">
                                </a>
                          <div class="caption">
                              <h3>Guavav Aphrodite Giant</h3>
                              <p>Price:Rs.10000.00</p>
                              <?php 
					
					if (check_if_added_to_cart(32)) { 
					echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
					} else {
                                	?>
					<a href="cart-add.php?id=32" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
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
                        <a href="Arabian Mau.php">
                          <img src="img/Bex_Arabian_Mau.jpg" alt="Responsive image" id="imgs"  width="260px" height="210px">
                                </a>
                          <div class="caption">
                              <h3>Arabian Mau</h3>
                              <p>Price:Rs.6000.00</p>
                              <?php 
					
					if (check_if_added_to_cart(33)) { 
					echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
					} else {
                                	?>
					<a href="cart-add.php?id=33" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
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
                        <a href="Asian Goldan Cat.php">
                          <img src="img/be6c3a59dc446f727042cd7d47ecf7a1--golden-brown-dark-brown.jpg" alt="Responsive image" width="260px" height="210px">
                                </a>
                          <div class="caption">
                              <h3>Asian Goldan Cat</h3>
                              <p>Price:Rs.4999.00</p>
                              <?php 
					
					if (check_if_added_to_cart(34)) { 
					echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
					} else {
                                	?>
					<a href="cart-add.php?id=34" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
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
                        <a href="Asian Semi Longhair.php">
                          <img src="img/Tiffanie_at_cat_show.jpg" alt="Responsive image"  width="260px" height="210px">
                                </a>
                          <div class="caption">
                              <h3>Asian Semi Longhair</h3>
                              <p>Price:Rs.6999.00</p>
                              <?php 
					
					if (check_if_added_to_cart(35)) { 
					echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
					} else {
                                	?>
					<a href="cart-add.php?id=35" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
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
                        <a href="British Cat.php">
                          <img src="img/british_cat.jpg" alt="Responsive image"  width="260px" height="210px">
                                </a>
                          <div class="caption">
                              <h3>British Cat</h3>
                              <p>Price:Rs.11999.00</p>
                              <?php 
					
					if (check_if_added_to_cart(36)) { 
					echo '<a href="winter.php" class="btn btn-block btn-success" disabled>Added to cart</a>';
					} else {
                                	?>
					<a href="cart-add.php?id=36" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
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
