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
        height: 1010px;
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
  <center><img src="img/download (29).jpg" width:40% height=250px style="border-radius:50px;"></center>
  <!-- <div class="text">Caption Text</div> -->
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <center><img src="img/canary_bird_l.jpg" width:40% height=250px style="border-radius:50px;"></center>
  <!-- <div class="text">Caption Two</div> -->
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <center><img src="img/yellow-canaries-on-branch_slowmotiongli-Shutterstock.jpg" width:40% height=250px style="border-radius:50px;"></center>
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
    <div class="xy"> This small finch has the power to turn most people into lifelong canary enthusiasts. It is a pleasant companion bird with a cheerful disposition. It communicates its content with a melodious song that is soft and pleasant. The canary has been carefully bred to be available in a variety of colors, sizes, and singing varieties.</div>
                             <center> <div class="xyz"><h1><u>Domestic canary</u></h1></div>
                             <div class="x">Deal of the day</div>
                              <p>Rs.5000.00</p></center>
                              

                             <!-- <button type="submit" class="btn btn-primary btn-block">Add to cart</button>-->
                          
                              <div class="abc">Home delivery not available</div>
<hr style="border-radius:50px; position:relative; left:300px; top: -120px;">
<div class="vl"></div>
<hr style="border-radius:50px; position:relative; left:307px; top: -40px;">



<div class="detail">
<br>  
COLOR<br><br>
<div class="color">Yellow,White</div>
<br>
<div class="vll"></div>
<div class="size">SIZE</div>
<div class="color1">Small</div>
<div class="vlll"></div>
<div class="size1">LIFESPAN</div>
<div class="color2">17-20 years</div>
<div class="vllll"></div>
<div class="size2">INTERACTION</div>
<div class="color3">Social</div>
<div class="vlllll"></div>
<div class="size3">SOUND</div>
<div class="color4">Vocal Communication</div>


<b>Health Problems</b><br>
1.Rare health issues that affect canaries are usually due to poor diet, a dirty cage, or drafts. Ill birds can lose weight and die very quickly, so get help from an avian veterinarian immediately if the bird develops baldness, scaly legs, diarrhea, constipation, or lethargy.<br>
2.Canaries are sensitive to air quality, so do not smoke around them or keep them in rooms where there are cooking vapors or fumes from solvents.<br>
3.Canaries are susceptible to certain viruses, fungi, and bacteria. They can get several treatable bacterial yeast infections like avian gastric yeast infection, candidiasis, and chlamydia. Other bacterial infections that can affect canaries are bumblefoot, which causes foot swelling and lesions; mycoplasma, a treatable condition that causes eye and nasal discharge; and tuberculosis, a non-treatable, fatal respiratory disease.<br>
4.The viruses that will kill canaries include the avian pox and the polyomavirus.5 Aspergillus is usually a fatal fungal infection, but in some cases, it may respond to antifungal treatment.



</div>
                                <?php 
					
					            if (check_if_added_to_cart(49)) { 
					                echo '<a href="#" class="btn btn-block btn-success" disabled style="width:200px; left:650px; top:-110px; position:relative; border-radius:50px;">Added to cart</a>';
				    	            } else {
                                             	?>
					                         <center><a href="cart-add.php?id=49" name="add" value="add" class="cart">Add to cart</a></center>
					            <?php
					             }
                                ?>
                               
                               
    </body>
</html>
