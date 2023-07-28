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
        <title>Pet Shop | Pets</title>
         <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script type="text/javascript" src="bootstrap/js/jquery-3.5.0.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        
         <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <link rel="stylesheet" href="css/style.css"/>
          <style>
* {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;}
.mySlides {display: none;}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  animation-name: fade;
  animation-duration: 4.5s;
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}
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
        
        <br><br><br><br>
        <div class="container">
            
            <div >
                
            <div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <center><img src="img/avoid-overfeeding-your-fish.jpg" style="width:80%" height="250px"></center>
  <!-- <div class="text">Caption Text</div> -->
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <center><img src="img/istockphoto-472563478-612x612.jpg" style="width:80%" height="250px"></center>
  <!-- <div class="text">Caption Two</div> -->
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <center><img src="img/149_building_and_maintaining_a_koi_pond.jpg" style="width:80%" height="250px"></center>
  <!-- <div class="text">Caption Three</div> -->
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>

<script>
let slideIndex = 0;
showSlides();

function showSlides() {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 3000); 
}

</script>

  
</div>
                
            </div>
            
                
            </div>
        </div>
        
                 <div class="container">
                    <div class="row text-center">
                  <div class="col-md-3 col-sm-6">
                      <div class="">
                        <br>
                        <a href="Mollies.php">
                          <img src="img/istockphoto-1251710579-612x612.jpg" alt="Responsive image"  width="260px" height="210px" 10>
                        </a>
                          <div class="caption">
                              <h3>Mollies</h3>
                              <p>Price:Rs.6000.00</p>
                              <?php 
					
					            if (check_if_added_to_cart(37)) { 
					                echo '<a href="dog.php" class="btn btn-block btn-success" disabled>Added to cart</a>';
				    	            } else {
                                             	?>
					                         <a href="cart-add.php?id=37" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
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
                        <a href="Bettafish.php">
                          <img src="img/bettafish.jpg" alt="Responsive image" title="Watermelon is the best fruit during all times" width="260px" height="210px">
                          </a>
                          <div class="caption">
                              <h3>Bettafish</h3>
                              <p>Price:Rs.8000.00</p>
                              <?php 
					
					if (check_if_added_to_cart(38)) { 
					echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
					} else {
                                	?>
					<a href="cart-add.php?id=38" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
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
                        <a href="Goldfish.php">
                          <img src="img/gold-fish-1.jpg" alt="Responsive image" title="Watermelon is the best fruit during all times" width="260px" height="210px">
                          </a>
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
                        <a href="Rainbowfish.php">
                          <img src="img/360_F_378487631_hheuY6hWrjsYV8fPbETv1vvvAf1IPwdx.jpg" alt="Responsive image" title="Watermelon is the best fruit during all times" width="260px" height="210px">
                          </a>
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
                              <!--<button type="submit" class="btn btn-primary btn-block">Add to cart</button>-->
                          </div>
                      </div>
                  </div>
                  
                  
                   <div class="col-md-3 col-sm-6">
                      <div class="">
                        <br>
                        <a href="GoldenDwarfBarbs.php">
                          <img src="img/images (1).jpg" alt="Responsive image"  width="260px" height="210px">
                          </a>
                          <div class="caption">
                              <h3>Golden Dwarf Barbs</h3>
                              <p>Price:Rs.12000.00</p>
                              <?php 
					
					if (check_if_added_to_cart(41)) { 
					echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
					} else {
                                	?>
					<a href="cart-add.php?id=41" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
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
                          <img src="img/angelfish-4.jpg" alt="Responsive image" title="Watermelon is the best fruit during all times" width="260px" height="210px">
                          </a>
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
                        <a href="AfricanCichlid.php">
                          <img src="img/African-Cichlid.jpg" alt="Responsive image" title="Watermelon is the best fruit during all times" width="260px" height="210px">
                          </a>
                          <div class="caption">
                              <h3>African Cichlid </h3>
                              <p>Price:Rs.10000.00</p>
                              <?php 
					
					if (check_if_added_to_cart(43)) { 
					echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
					} else {
                                	?>
					<a href="cart-add.php?id=43" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
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
                        <a href="BristlenosePleco.php">
                          <img src="img/Bristlenose-Pleco.jpg" alt="Responsive image" id="imgs" title="Watermelon is the best fruit during all times" width="260px" height="210px">
                          </a>
                          <div class="caption">
                              <h3>Bristlenose Pleco</h3>
                              <p>Price:Rs.15000.00</p>
                              <?php 
					
					if (check_if_added_to_cart(44)) { 
					echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
					} else {
                                	?>
					<a href="cart-add.php?id=44" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
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
                        <a href="ClownLoach.php">
                          <img src="img/Clown-Loach.jpg" alt="Responsive image" title="Watermelon is the best fruit during all times" width="260px" height="210px">
                          </a>
                          <div class="caption">
                              <h3>Clown Loach</h3>
                              <p>Price:Rs.13000.00</p>
                              <?php 
					
					if (check_if_added_to_cart(45)) { 
					echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
					} else {
                                	?>
					<a href="cart-add.php?id=45" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
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
                        <a href="CoryCatfish.php">
                          <img src="img/Cory-Catfish-.jpg" alt="Responsive image" title="Watermelon is the best fruit during all times" width="260px" height="210px">
                          </a>
                          <div class="caption">
                              <h3>Cory Catfish</h3>
                              <p>Price:Rs.15000.00</p>
                              <?php 
					
					if (check_if_added_to_cart(46)) { 
					echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
					} else {
                                	?>
					<a href="cart-add.php?id=46" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
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
                        <a href="DwarfGourami.php">
                          <img src="img/Dwarf-Gourami.jpg" alt="Responsive image" title="Watermelon is the best fruit during all times" width="260px" height="210px">
                          </a>
                          <div class="caption">
                              <h3>Dwarf Gourami</h3>
                              <p>Price:Rs.16000.00</p>
                              <?php 
					
					if (check_if_added_to_cart(47)) { 
					echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
					} else {
                                	?>
					<a href="cart-add.php?id=47" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
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
                        <a href="Oscar.php">
                          <img src="img/Oscar.jpg" alt="Responsive image" title="Watermelon is the best fruit during all times" width="260px" height="210px">
                          </a>
                          <div class="caption">
                              <h3>Oscar</h3>
                              <p>Price:Rs.16000.00</p>
                              <?php 
					
					if (check_if_added_to_cart(48)) { 
					echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
					} else {
                                	?>
					<a href="cart-add.php?id=48" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
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
