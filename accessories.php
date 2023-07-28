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

            .second-txt {
            position: absolute;
            bottom: 28px;
            left: 200px; 
            color:pink;
            font-family:cursive;
            top: 200px;
                     
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
  <div class="numbertext"></div>
  <center><img src="img/259a318c-9d67-47cc-9f5b-9736839e0b89.__CR0,0,970,300_PT0_SX970_V1___.jpg" style="width:100%" height="250px"></center>
  <!-- <div class="text">Caption Text</div> -->
</div>

<div class="mySlides fade">
  <div class="numbertext"></div>
  <center><img src="img/dierbenodigdheden-banner-bulbby-en (1).jpg" style="width:100%" height="250px"></center>
  <!-- <div class="text">Caption Two</div> -->
</div>

<div class="mySlides fade">
  <div class="numbertext"></div>
  <center><img src="img/Hero.jpg" style="width:100%" height="250px"></center>
  <h3 class="second-txt">
           Keep your cat healthy and good||
        </h3>
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
  setTimeout(showSlides, 3000); // Change image every 2 seconds
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
                          <img src="img/61ItloYY6qL._SL1000_.jpg" alt="Responsive image"  width="260px" height="310px" 10>
                          <div class="caption">
                              <h5>Pedigree RANCHOS Spiral Wrap Stick Treats for Dog of All Life Stages, Chicken & Smoky Lamb Flavour, 60g</h5>
                              <p>Price:Rs.300.00</p>
                              <?php 
					
					            if (check_if_added_to_cart(61)) { 
					                echo '<a href="dog.php" class="btn btn-block btn-success" disabled>Added to cart</a>';
				    	            } else {
                                             	?>
					                         <a href="cart-add.php?id=61" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
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
                          <img src="img/41BbXxYwnlL._AC_SS450_.jpg" alt="Responsive image"  width="260px" height="310px">
                          <div class="caption">
                              <h5>Pets Empire Set of 2 Stainless Steel Dog Bowl with Rubber Base, Pets Feeding Bowl and Water Bowl </h5>
                              <p>Price:Rs.1000.00</p>
                              <?php 
					
					if (check_if_added_to_cart(62)) { 
					echo '<a href="dog.php" class="btn btn-block btn-success" disabled>Added to cart</a>';
					} else {
                                	?>
					<a href="cart-add.php?id=62" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
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
                          <img src="img/download (5).jpg" alt="Responsive image"  width="260px" height="310px">
                          <div class="caption">
                              <h5>The Pets Company Pet Massage Rubber Bath Glove for Dogs, Cats, Rabbit, & Hamster</h5>
                              <p>Price:Rs.500.00</p>
                              <?php 
					
					if (check_if_added_to_cart(63)) { 
					echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
					} else {
                                	?>
					<a href="cart-add.php?id=63" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
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
                          <img src="img/517Q8NTI+bL._SL1100_.jpg" alt="Responsive image"  width="260px" height="310px">
                          <div class="caption">
                              <h5>PetVogue Dog Nail Cutter, Pet Nail Clipper,Claw & Nails Clippers Grinder Trimmer for Medium, Large Dogs</h5>
                              <p>Price:Rs.100.00</p>
                              <?php 
					
					if (check_if_added_to_cart(64)) { 
					echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
					} else {
                                	?>
					<a href="cart-add.php?id=64" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
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
                          <img src="img/41BYDnIsfbS._SY450_.jpg" alt="Responsive image"  width="260px" height="310px">
                          <div class="caption">
                              <h5>Senapati Dog Combo Pack of Harness, Neck Collar Belt and Rope Set (Black, Medium, Waterproof)</h5>
                              <p>Price:Rs.200.00</p>
                              <?php 
					
					if (check_if_added_to_cart(65)) { 
					echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
					} else {
                                	?>
					<a href="cart-add.php?id=65" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
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
                          <img src="img/61KjOJbaOBL._SX679_.jpg" alt="Responsive image"  width="260px" height="310px">
                          <div class="caption">
                              <h5>Petterati Pet Sanitizer | Lavender | 250ml | BKC & Alcohol Free | Safe for Dogs & Cats | Kills 99.9% Germs </h5>
                              <p>Price:Rs.300.00</p>
                              <?php 
					
					if (check_if_added_to_cart(66)) { 
					echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
					} else {
                                	?>
					<a href="cart-add.php?id=66" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
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
                          <img src="img/51RpEukSetL._SY550_.jpg" alt="Responsive image"  width="260px" height="310px">
                          <div class="caption">
                              <h5>The Dogs Company Natural Rubber Dog Bone Chew Toy, Puppy Teething Toy, 6 Inches, Colour May Vary</h5>
                              <p>Price:Rs.175.00</p>
                              <?php 
					
					if (check_if_added_to_cart(67)) { 
					echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
					} else {
                                	?>
					<a href="cart-add.php?id=67" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
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
                          <img src="img/615-FFo1OVL.jpg" alt="Responsive image" id="imgs"  width="260px" height="310px">
                          <div class="caption">
                              <h5>Fluffy's Luxurious Polyester Dog Bed | Bolster Dog Bed Fits Metal Dog Crates | Machine Wash & Dry</h5>
                              <p>Price:Rs.1000.00</p>
                              <?php 
					
					if (check_if_added_to_cart(68)) { 
					echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
					} else {
                                	?>
					<a href="cart-add.php?id=68" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
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
                          <img src="img/71tHpVu0w3L._SY355_.jpg" alt="Responsive image"  width="260px" height="310px">
                          <div class="caption">
                              <h5>Meat Up Mutton Flavour, Real Chicken Biscuit For Dog of All Life Stages, 500g (Buy 1 Get 1 Free)</h5>
                              <p>Price:Rs.500.00</p>
                              <?php 
					
					if (check_if_added_to_cart(69)) { 
					echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
					} else {
                                	?>
					<a href="cart-add.php?id=69" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
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
                          <img src="img/51TGH2xoxoL._SY355_.jpg" alt="Responsive image"  width="260px" height="310px">
                          <div class="caption">
                              <h5>LIVEONCE Safest Round Organic Bird nest Purely Handmade Sparrow/Small Birds</h5>
                              <p>Price:Rs.300.00</p>
                              <?php 
					
					if (check_if_added_to_cart(70)) { 
					echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
					} else {
                                	?>
					<a href="cart-add.php?id=70" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
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
                          <img src="img/51Jl0XVQBHL._SL500_.jpg" alt="Responsive image" width="260px" height="310px">
                          <div class="caption">
                              <h5>PAXI DAYA Window Bird Feeder Plastic Material Green Color Food Small and Medium Birds Pack of 2</h5>
                              <p>Price:Rs.300.00</p>
                              <?php 
					
					if (check_if_added_to_cart(71)) { 
					echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
					} else {
                                	?>
					<a href="cart-add.php?id=71" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
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
                          <img src="img/61iAd-aoe2L._SX679_.jpg" alt="Responsive image"  width="260px" height="310px">
                          <div class="caption">
                              <h5>Buraq Multi-Colour Aquarium Fish Tank Light - For Making Your Fish Tank Superior </h5>
                              <p>Price:Rs.400.00</p>
                              <?php 
					
					if (check_if_added_to_cart(72)) { 
					echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
					} else {
                                	?>
					<a href="cart-add.php?id=72" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
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
                   <div><small>&copy;</small> Pet Accessories | All Rights Reserved</div>
               </center>
           </div>
           
           
       </footer>
        
        
    </body>
</html>
