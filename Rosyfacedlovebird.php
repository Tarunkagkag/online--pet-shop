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

.xyz{
        position: absolute;
            bottom: 28px;
            left: 580px; 
            color:Black;
            top: 40px;
            font-f;
    }
    p{
        position: absolute;
        left:570px;
        top:350px;
        background-color:#ADD8E6;
        width:160px;
        
        font-size:1.75em;
    }

    body{
        background-color:lightgray;
    }
    .xy{
        position: absolute;
        bottom: 28px;
        left: 600px; 
        color:Black;
        top: 110px;
        font-size:1.75em;
    }
    .x{
        position: absolute;
        left:570px;
        top:320px;
        font-size:1.5em;
        color:red;
    }
    .vl{
        border-left: 6px solid green;
        height: 760px;
        position: absolute;
        left:490px;
        top:0px; 
    }
    .abc{
        text-decoration:line-through;
        color:red;
        font-size:1.5em;
        position: absolute;
        left:1100px;
        top:340px;
        border-radius:2px solid black;
        
       
    }
    .detail{
        position: absolute;
        left:570px;
        top:410px;
        font-size:1.5em;
        color:black;
    }

    .details1{
        position: absolute;
        left:970px;
        top:410px;
        font-size:1.5em;
        color:black;
    }
    .cart{
        position: absolute;
        left:770px;
        top:340px;
        font-size:1.5em;
        color:black;
        background-color:orange;
        width:200px;
        border-radius:50px;
    }
    .color{
      color:red;
    }
    .color1{
      color:red;
      position: absolute;
       
        left:180px;
        top: 90px;
      }
      .color2{
      color:red;
      position: absolute;
       
        left:340px;
        top: 90px;
      }
      .color3{
      color:red;
      position: absolute;
       
        left:510px;
        top: 90px;
      }
      .color4{
      color:red;
      position: absolute;
       
        left:710px;
        top: 90px;
      }
    .vll{
        border-left: 2px solid black;
        height: 150px;
        position: absolute;
        left:160px;
        top:-10px; 
    }
   .vlll{
        border-left: 2px solid black;
        height: 150px;
        position: absolute;
        left:330px;
        top:-10px;
   } 
        .vllll{
        border-left: 2px solid black;
        height: 150px;
        position: absolute;
        left: 500px;
        top:-10px; 
    }
    .vlllll{
        border-left: 2px solid black;
        height: 150px;
        position: absolute;
        left: 700px;
        top:-10px; 
    }
    .size{
        position: absolute;
       
        left:180px;
        top:30px;
      }
      .size1{
        position: absolute;
       
        left:340px;
        top:30px;
      }
      .size2{
        position: absolute;
       
        left: 510px;
        top:30px;
      }
      .size3{
        position: absolute;
       
        left: 710px;
        top:30px;
      }

    * {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;}
.mySlides {display: none;}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
  left:-500px;
  
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

</style>
    <body>
        <?php
        include 'includes/header.php';
        include 'includes/check-if-added.php';
        ?>
        
        <br><br><br><br><br>

        
        <div class="container">
            
            <div >
                
            <div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <center><img src="img/Peach-Faced-Lovebird_Tracy-Starr_Shutterstock.jpg" width:40% height=250px style="border-radius:50px;"></center>
  <!-- <div class="text">Caption Text</div> -->
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <center><img src="img/5490355440_301ec37dfd_b.jpg" width:40% height=250px style="border-radius:50px;"></center>
  <!-- <div class="text">Caption Two</div> -->
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <center><img src="img/lovebird-1.jpg" width:40% height=250px style="border-radius:50px;"></center>
  <!-- <div class="text">Caption Three</div> -->
</div>

</div>
<br>

<div>
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
        
                
                 
                          <!-- <img src="img\istockphoto-151547558-612x612.jpg" alt="Responsive image" width="300px" height="300px"  style="border-radius:50px; position:relative; left:100px; top:0px;">     -->
    <div class="xy">Rosy-faced lovebirds (Agapornis roseicollis) prefer open and wooded country which includes semi-desert shrublands, cultivated lands and riparian woodlands, environments that are dependable on water. A noisy and gregarious bird, they congregate small flocks of up to 20. Roosts in sociable weavers nests.</div>
                             <center> <div class="xyz"><h1><u>Rosy Face Lovebird</u></h1></div>
                             <div class="x">Deal of the day</div>
                              <p>Rs.9000.00</p></center>
                              

                             <!-- <button type="submit" class="btn btn-primary btn-block">Add to cart</button>-->
                          
                              <div class="abc">Home delivery not available</div>
<hr style="border-radius:50px; position:relative; left:300px; top: -120px;">
<div class="vl"></div>
<hr style="border-radius:50px; position:relative; left:307px; top: -40px;">

<div class="detail">
<br>  
COLOR<br><br>
<div class="color">Orange,Green</div>
<br>
<div class="vll"></div>
<div class="size">SIZE</div>
<div class="color1">Small</div>
<div class="vlll"></div>
<div class="size1">LIFESPAN</div>
<div class="color2">15-27 years</div>
<div class="vllll"></div>
<div class="size2">INTERACTION</div>
<div class="color3">Social</div>
<div class="vlllll"></div>
<div class="size3">SOUND</div>
<div class="color4">Vocal Communication</div><br>

<b>Diet</b>: The diet mainly consists of seeds and berries. When food is plentiful, it may gather in flocks containing hundreds of birds. It can sometimes be a pest in agricultural areas feeding on crops such as millet.<br>
<b>Health</b>:Lovebirds are susceptible to chlamydiosis, self-mutilation as well as nutritional deficiencies related to an inadequate diet, especially if fed a mostly seed diet.<br>
<b>Behaviour</b>:Always alert and mischievous, the peach-faced lovebird is a good escape artist and is always energetic and ready to play. If kept in pairs, these birds tend to love the “married life,” to the possible exclusion of the owner. If kept alone and given frequent attention, the peach-faced lovebird is as loving as the family lap dog. If neglected, even for a few weeks, many lovebirds tend to revert and become snappish.








</div>
                                <?php 
					
					            if (check_if_added_to_cart(57)) { 
					                echo '<a href="#" class="btn btn-block btn-success" disabled style="width:200px; left:650px; top:-110px; position:relative; border-radius:50px;">Added to cart</a>';
				    	            } else {
                                             	?>
					                         <center><a href="cart-add.php?id=57" name="add" value="add" class="cart">Add to cart</a></center>
					            <?php
					             }
                                ?>
                               
                               
    </body>
</html>
