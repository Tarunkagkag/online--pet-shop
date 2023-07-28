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
      .example {
        cursor: pointer;
        height: 210px;
        position: relative;
        overflow: hidden;
        width: 230px;
        text-align: center;
      }
      .example .fadedbox {
        background-color: #666666;
        position: absolute;
        top: 0;
        left: 0;
        color: #fff;
        -webkit-transition: all 300ms ease-out;
        -moz-transition: all 300ms ease-out;
        -o-transition: all 300ms ease-out;
        -ms-transition: all 300ms ease-out;
        transition: all 300ms ease-out;
        opacity: 0;
        width: 230px;
        height: 210px;
        padding: 130px 20px;
      }
      .example:hover .fadedbox {
        opacity: 0.8;
      }
      .example .text {
        -webkit-transition: all 300ms ease-out;
        -moz-transition: all 300ms ease-out;
        -o-transition: all 300ms ease-out;
        -ms-transition: all 300ms ease-out;
        transition: all 300ms ease-out;
        transform: translateY(30px);
        -webkit-transform: translateY(30px);
      }
      .example .title {
        font-size: 1.5em;
        text-transform: uppercase;
        opacity: 0;
        transition-delay: 0.2s;
        transition-duration: 0.3s;
      }
      .example:hover .title,
      .example:focus .title {
        opacity: 1;
        transform: translateY(0px);
        -webkit-transform: translateY(0px);
      }
      

      h2:hover {
  background-color: gray;
      }
      body{
        background-color: grey;
      }
      .card{
        width:0px;
      }
      
    </style>
          
    </head>
    <body>
        <?php
        include 'includes/header.php';
        include 'includes/check-if-added.php';
        ?>
        
        <br><br><br><br><br>
        <!-- <div class="container">
            
            <div class="jumbotron"> 
                <h1>Welcome to Pet World!</h2>
                <p>A place for you and for your dream pet.</p> -->
              <!-- <a href="dog.php"><img src="img\dog3.png" height="80px" width="80px" style="border-radius:50px;"></a>&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; -->
                <!-- <h4>Gog</h4> -->

                <!-- <div style = "position:relative; left:200px; top:-120px;"> -->
                <!-- <a href="cat.php"><img src="img\png-clipart-cats-cats.png" height="80px" width="80px"  style="border-radius:50px; "></a> &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; -->
                <!-- <h4>Cat</h4> -->
                <!-- </div> -->

                <!-- <div style = "position:relative; left:400px; top:-240px;"> -->
                <!-- <a href="fish.php"><img src="img\106-1066602_transparent-gold-fish-png-goldfish-png-png-download.png" height="80px" width="80px"  style="border-radius:50px; "></a> &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; -->
                <!-- <h4>Fish</h4> -->
                <!-- <div> -->
                <!-- <a href="birds.php"><img src="img\parrot.jpg" height="80px" width="80px"  style="border-radius:50px;"></a>&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; -->

                    <!-- <a href="accessories.php"><img src="img\download (3).jpg" height="80px" width="80px"  style="border-radius:50px; "></a>    -->

                    <table>
                    <div class="container">
            
            <div class="jumbotron"> 
                <h1>Welcome to Pet World!</h2>
                <p>A place for you and for your dream pet.</p>
                     <?php include "includes/db.php";
        $sql="SELECT * FROM `catgories`";
        $result=mysqli_query($conn,$sql);
        while($row=mysqli_fetch_assoc($result))
        {
            $cat=$row['categories_name'];
            
            $link=$row['link'];
            echo '<div class="col-md-4" style="width:200px; height:200px;">
                        <div  style="width: 18rem;">
                                   
                                     <img src="data:image;base64,'.base64_encode($row['Image']).'" height=100px width=100px style="border-radius:50px;"><br>
                                     <div class="card-body">
                                        <h4 class="card-title">'.$cat.'</h4>
                                        
                                                    <a href="'.$link.'" class="btn btn-primary">Explore</a>
                                    </div>
                         </div>
                     </div>';
        }

        ?> 
                   
        </table> 
            </div> 
        </div>
              <div class="container">
                    <div class="row text-center">
                 
                  <div class="col-md-3 col-sm-6">
                      <div class="">
                            
                                <a href="Australian Shepherd.php"><br>
                               <img src="img\image.jpg" alt="Responsive image"  width="260px" height="210px">
                        </a>
                                                             <!-- <div class="fadedbox"> -->
                                <!-- <div class="title text"> </div> -->
                            <!-- </div>  -->
                       
                          <div class="caption">
                              
                              <h3>Australian Shepherd</h3>
                              <p>Price:Rs 20000.00</p>
                              <?php 
					
					            if (check_if_added_to_cart(19)) { 
					                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
				    	            } else {
                                             	?>
					                         <a href="cart-add.php?id=19" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
					            <?php
					             }
                                ?>
                             <!-- <button type="submit" class="btn btn-primary btn-block">Add to cart</button>-->
                          </div>
                      </div>
                  </div>
                  
                  
                  <div class="col-md-3 col-sm-6">
                      <div class="">
                        <a href="img2.php"><br>
                          <img src="img/Aegean-cat-from-the-Greek-islands-24.jpg" alt="Responsive image" width="260px" height="210px">
                                </a>
                          <!-- <div class="fadedbox">
                                <div class="title text">Mango is the king of fruits. </div>
                            </div> -->
                       
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
                      <div class="">
                      <br>
                          <img src="img/pitbull-dog-breeds-4843994-hero-db6922b6c8294b45b19c07aff5865790.jpg" alt="Responsive image" width="260px" height="210px">
                          <div class="fadedbox">
                                <div class="title text" style="color:red; "> <h2>Not Available<h2></div>
                            </div>
                        
                          <div class="caption">
                              <h3>Bulldog</h3>
                              <p>Price:Rs.6999.00</p>
                              <?php 
					
					if (check_if_added_to_cart(4)) { 
					echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
					} else {
                                	?>
					<a  name="add" value="add" class="btn btn-block btn-primary" disabled>Add to cart</a>
					<?php
					}
                                ?>
                              <!--<button type="submit" class="btn btn-primary btn-block">Add to cart</button>-->
                          </div>
                      </div>
                  </div>
                 
                  
                  
                   <div class="col-md-3 col-sm-6">
                      <div class="">
                      
                      <a href="canary.php"><br>     
                          <img src="img/download (1).jpg" alt="Responsive image" width="260px" height="210px" >
                </a>
                          <!-- <div class="fadedbox">
                                <div class="title text"> Apple a day keeps doctor away </div>
                            </div>  -->
                        
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
                              <!-- <button type="submit" class="btn btn-primary btn-block">Add to cart</button> -->
                          </div>
                      </div>
                  </div>
                  
                  <div class="col-md-3 col-sm-6">
                      <div class="">
                     
                      <br>
                      <a href="Doberman Pinscher.php">
                          <img src="img/istockphoto-93440349-612x612.jpg" alt="Responsive image" width="260px" height="210px" >
                          </a>
                          <!-- <div class="fadedbox">
                                <div class="title text"> Strawberry packed with vitamins </div>
                            </div> -->
                        
                          <div class="caption">
                              <h3>Doberman Pinscher</h3>
                              <p>Price:Rs.15000.00</p>
                              <?php 
					
					if (check_if_added_to_cart(22)) { 
					echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
					} else {
                                	?>
					<a href="cart-add.php?id=22" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
					<?php
					}
                                ?>
                              <!--<button type="submit" class="btn btn-primary btn-block">Add to cart</button>-->
                          </div>
                      </div>
                  </div>
                  
                  <div class="col-md-3 col-sm-6">
                      <div class="">
                      
                      <br>
                      <a href="Rainbowfish.php">
                          <img src="img/360_F_378487631_hheuY6hWrjsYV8fPbETv1vvvAf1IPwdx.jpg" alt="Responsive image" width="260px" height="210px" >
                          </a>
                          <!-- <div class="fadedbox">
                                <div class="title text"> Musk Melon Immunity Booster </div>
                            </div> -->
                        
                          <div class="caption">
                              <h3>Rainbow Fish</h3>
                              <p>Price:Rs.8000.00</p>
                              <?php 
					
					if (check_if_added_to_cart(40)) { 
					echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
					} else {
                                	?>
					<a href="cart-add.php?id=40" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
					<?php
					}
                                ?>
                             <!-- <button type="submit" class="btn btn-primary btn-block">Add to cart</button>-->
                          </div>
                      </div>
                  </div>
                  
                   <div class="col-md-3 col-sm-6">
                      <div class="">
                      
                      <br>
                      <a href="img4.php">
                          <img src="img/American-Curl-AP-1LHCGX-645sm3614.jpg" alt="Responsive image" width="260px" height="210px">
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
                      <div class="">
                      
                      <br>
                      <a href="Great Dane.php">
                          <img src="img/are-great-danes-difficult-to-train.jpg" alt="Responsive image" id="imgs" width="260px" height="210px" >
                          </a>
                          <!-- <div class="fadedbox">
                                <div class="title text"> Dragon-fruit high in fiber </div>
                            </div> -->
                        
                          <div class="caption">
                              <h3>Great Dane</h3>
                              <p>Price:Rs.26000.00</p>
                              <?php 
					
					if (check_if_added_to_cart(24)) { 
					echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
					} else {
                                	?>
					<a href="cart-add.php?id=24" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
					<?php
					}
                                ?>
                             <!-- <button type="submit" class="btn btn-primary btn-block">Add to cart</button>-->
                          </div>
                      </div>
                  </div>
                  
                  <div class="col-md-3 col-sm-6">
                      <div class="">
                     
                      <br>
                      <a href="Goldfish.php">
                          <img src="img/iStock-1165645110.jpg" alt="Responsive image" width="260px" height="210px">
                          </a>
                          <!-- <div class="fadedbox">
                                <div class="title text"> Blue-berry reduce diabetics</div>
                            </div> -->
                       
                          <div class="caption">
                              <h3>Golden Fish</h3>
                              <p>Price:Rs.10000.00</p>
                              <?php 
					
					if (check_if_added_to_cart(39)) { 
					echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
					} else {
                                	?>
					<a href="cart-add.php?id=39" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
					<?php
					}
                                ?>
                              <!--<button type="submit" class="btn btn-primary btn-block">Add to cart</button>-->
                          </div>
                      </div>
                  </div>
                  
                  
                  <div class="col-md-3 col-sm-6">
                      <div class="">
                     
                      <br>
                      <a href="Budgerigar.php">
                          <img src="img/all-about-budgerigars.jpg" alt="Responsive image" width="260px" height="210px" >
                          </a>
                          <!-- <div class="fadedbox">
                                <div class="title text"> Jackfruit Rich in Vitamin C</div>
                            </div> -->
                       
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
                      <div class="">
                     
                      <br>
                      <a href="Angelfish.php">
                          <img src="img/angelfish-4.jpg" alt="Responsive image" width="260px" height="210px" >
                          </a>
                          <!-- <div class="fadedbox">
                                <div class="title text">Papaya reduce heart </div>
                            </div> -->
                        
                          <div class="caption">
                              <h3>Angelfish</h3>
                              <p>Price:Rs.11000.00</p>
                              <?php 
					
					if (check_if_added_to_cart(42)) { 
					echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
					} else {
                                	?>
					<a href="cart-add.php?id=42" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
					<?php
					}
                                ?>
                              <!--<button type="submit" class="btn btn-primary btn-block">Add to cart</button>-->
                          </div>
                      </div>
                    </div>

                    <div class="col-md-3 col-sm-6">
                      <div class="">
                      
                      <br>
                      <a href="Golden Retriever.php">
                          <img src="img/hoe-oud-worden-golden-retrievers.jpg" alt="Responsive image" width="260px" height="210px" >
                          </a>
                          
                          <!-- <div class="fadedbox">
                                <div class="title text"> Jackfruit Rich in Vitamin C</div>
                            </div> -->
                        
                          <div class="caption">
                              <h3>Golden Retriever</h3>
                              <p>Price:Rs.35000.00</p>
                              <?php 
					
					if (check_if_added_to_cart(11)) { 
					echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
					} else {
                                	?>
					<a href="cart-add.php?id=11" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a><br><br>
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
                   <p><small>&copy;</small>  Welcome to Our Pet Shop </p>
               </center>
           </div>
           
           
       </footer>
        
        
    </body>
</html>
