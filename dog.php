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
  <center><img src="img/Siberian-Husky-standing-outdoors-in-the-winter.jpg" style="width:50%" height="250px"></center>
  <!-- <div class="text">Caption Text</div> -->
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <center><img src="img/chihuahua-dog-running-across-grass-royalty-free-image-1580743445.jpg" style="width:50%" height="250px"></center>
  <!-- <div class="text">Caption Two</div> -->
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <center><img src="img/albino_animal_autumn_canine_cat_color_cute_dog_604243.jpg" style="width:50%" height="250px"></center>
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
                        <a href="labrador.php">
                          <img src="img/640px-Labrador_on_Quantock_(2175262184).jpg" alt="Responsive image"  width="260px" height="210px" >
                        </a>
                          <div class="caption">
                              <h3>labrador retriever</h3>
                              <p>Price:Rs.12000.00</p>
                              <?php 
					
					            if (check_if_added_to_cart(13)) { 
					                echo '<a href="dog.php" class="btn btn-block btn-success" disabled>Added to cart</a>';
				    	            } else {
                                             	?>
					                         <a href="cart-add.php?id=13" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
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
                        <a href="Rottweiler.php">
                          <img src="img/ev-blog-rottweiller-header-1024x683.jpg" alt="Responsive image" title="Watermelon is the best fruit during all times" width="260px" height="210px">
                      </a>
                          <div class="caption">
                              <h3>Rottweiler</h3>
                              <p>Price:Rs.8000.00</p>
                              <?php 
					
					if (check_if_added_to_cart(14)) { 
					echo '<a href="dog.php" class="btn btn-block btn-success" disabled>Added to cart</a>';
					} else {
                                	?>
					<a href="cart-add.php?id=14" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
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
                        <a href="Pomeranian.php">
                          <img src="img/istockphoto-1276949137-170667a.jpg" alt="Responsive image" title="Watermelon is the best fruit during all times" width="260px" height="210px">
                          </a>
                          <div class="caption">
                              <h3>Pomeranian</h3>
                              <p>Price:Rs.15000.00</p>
                              <?php 
					
					if (check_if_added_to_cart(15)) { 
					echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
					} else {
                                	?>
					<a href="cart-add.php?id=15" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
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
                        <a href="Chihuahua.php">
                          <img src="img/chihuahua-UK.jpg" alt="Responsive image" title="Watermelon is the best fruit during all times" width="260px" height="210px">
                          </a>
                          <div class="caption">
                              <h3>Chihuahua</h3>
                              <p>Price:Rs.10000.00</p>
                              <?php 
					
					if (check_if_added_to_cart(16)) { 
					echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
					} else {
                                	?>
					<a href="cart-add.php?id=16" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
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
                        <a href="Pug.php">
                          <img src="img/pug-2035675_960_720.jpg" alt="Responsive image" title="Watermelon is the best fruit during all times" width="260px" height="210px">
                          </a>
                          <div class="caption">
                              <h3>Pug</h3>
                              <p>Price:Rs.12000.00</p>
                              <?php 
					
					if (check_if_added_to_cart(17)) { 
					echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
					} else {
                                	?>
					<a href="cart-add.php?id=17" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
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
                        <a href="Beagle.php">
                          <img src="img/maxresdefault.jpg" alt="Responsive image" title="Watermelon is the best fruit during all times" width="260px" height="210px">
                          </a>
                          <div class="caption">
                              <h3>Beagle</h3>
                              <p>Price:Rs.11000.00</p>
                              <?php 
					
					if (check_if_added_to_cart(18)) { 
					echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
					} else {
                                	?>
					<a href="cart-add.php?id=18" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
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
                        <a href="Australian Shepherd.php">
                          <img src="img/image.jpg" alt="Responsive image" title="Watermelon is the best fruit during all times" width="260px" height="210px">
                          </a>
                          <div class="caption">
                              <h3>Australian Shepherd </h3>
                              <p>Price:Rs.20000.00</p>
                              <?php 
					
					if (check_if_added_to_cart(19)) { 
					echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
					} else {
                                	?>
					<a href="cart-add.php?id=19" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
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
                        <a href="Border Collie.php">
                          <img src="img/istockphoto-484910814-612x612.jpg" alt="Responsive image" id="imgs" title="Watermelon is the best fruit during all times" width="260px" height="210px">
                          </a>
                          <div class="caption">
                              <h3>Border Collie</h3>
                              <p>Price:Rs.10000.00</p>
                              <?php 
					
					if (check_if_added_to_cart(20)) { 
					echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
					} else {
                                	?>
					<a href="cart-add.php?id=20" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
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
                        <a href="Yorkshire Terrier.php">
                          <img src="img/istockphoto-637117392-612x612.jpg" alt="Responsive image" title="Watermelon is the best fruit during all times" width="260px" height="210px">
                          </a>
                          <div class="caption">
                              <h3>Yorkshire Terrier</h3>
                              <p>Price:Rs.40000.00</p>
                              <?php 
					
					if (check_if_added_to_cart(21)) { 
					echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
					} else {
                                	?>
					<a href="cart-add.php?id=21" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
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
                        <a href="Doberman Pinscher.php">
                          <img src="img/istockphoto-93440349-612x612.jpg" alt="Responsive image" title="Watermelon is the best fruit during all times" width="260px" height="210px">
                          </a>
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
                      <div class=" ">
                        <br>
                        <a href="Boxer Bringe.php">
                          <img src="img/Boxer_bringe.jpg" alt="Responsive image" title="Watermelon is the best fruit during all times" width="260px" height="210px">
                          </a>
                          <div class="caption">
                              <h3>Boxer Bringe</h3>
                              <p>Price:Rs.16000.00</p>
                              <?php 
					
					if (check_if_added_to_cart(23)) { 
					echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
					} else {
                                	?>
					<a href="cart-add.php?id=23" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
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
                        <a href="Great Dane.php">
                          <img src="img/are-great-danes-difficult-to-train.jpg" alt="Responsive image" title="Watermelon is the best fruit during all times" width="260px" height="210px">
                          </a>
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
