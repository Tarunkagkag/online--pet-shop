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
        width:130px;
        
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
        height: 800px;
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

</style>
    <body>
        <?php
        include 'includes/header.php';
        include 'includes/check-if-added.php';
        ?>
        
        <br><br><br><br><br>
        
                
                 
                          <img src="img/Bex_Arabian_Mau.jpg" alt="Responsive image" width="300px" height="300px"  style="border-radius:50px; position:relative; left:100px; top:0px;">    
    <div class="xy">The Arabian Mau boasts long legs, a tapering tail and large ears. The single coat is fine and glossy, shedding moderately, and is recognised in three varieties – tabby, bicolour, and white. The Arabian Mau is considered a serious and highly inquisitive breed, and is not fussy when it comes to food.</div>
                             <center> <div class="xyz"><h1><u>Arabian Mau</u></h1></div>
                             <div class="x">Deal of the day</div>
                              <p>Rs.6000.00</p></center>
                              

                             <!-- <button type="submit" class="btn btn-primary btn-block">Add to cart</button>-->
                          
                              <div class="abc">Home delivery not available</div>
<hr style="border-radius:50px; position:relative; left:558px; top: -130px;">
<div class="vl"></div>
<hr style="border-radius:50px; position:relative; left:566px; top: -50px;">

<div class="detail"><b>Weight range:</b><br>
Male : medium: 9-11 kg.<br>
Female: medium: 7-9 kg.<br>

Eye color:<br>
Green, Gold<br>

Expectations:<br>
Longevity Range: 14-17 yrs.<br>
Social/Attention Needs: High<br>
Tendency to Shed : Low  </div>

<div class="details1">
<b>Coat:</b><br>
Length: Short, Medium<br>
Characteristics : Silky, Smooth<br>
Colors:White,grey,light golden<br>
Pattern : Ticking<br>
Less Allergenic: No<br>
Overall Grooming Needs: Low
</div>
                                <?php 
					
					            if (check_if_added_to_cart(33)) { 
					                echo '<a href="#" class="btn btn-block btn-success" disabled style="width:200px; left:800px; top:-120px; position:relative; border-radius:50px;">Added to cart</a>';
				    	            } else {
                                             	?>
					                         <center><a href="cart-add.php?id=33" name="add" value="add" class="cart">Add to cart</a></center>
					            <?php
					             }
                                ?>
                               
                               
    </body>
</html>
