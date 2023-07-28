
<?php
require("includes/common.php");

if (isset($_SESSION['email'])) {
    header('location: products.php');
}
?>


<!DOCTYPE html>
<!--

-->
<html>
    
    <head>
      <meta charset="UTF-8">
        <title>Pet Shop</title>
         <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script type="text/javascript" src="bootstrap/js/jquery-3.5.0.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
         <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <link rel="stylesheet" href="css/style.css"/>
          <style>
            .logo h1{
    text-transform: uppercase;
    font-family: Arial, Helvetica, sans-serif;
    font-size: 52;
}
</style>

    </head>
    <body>
        <?php
        include 'includes/header.php';
        ?>
        <div id="banner-image">
            <div id="bannerimg"></div>
           <div class="container">
               <center>
               <div id="banner_content">
                  <div class="logo"> 
                  <h1>Welcome to Pet sell </h1>
                  <!-- <h1>Welcome to Pet sell </h1> -->
                </div>
                   <p><b>Whether big or small we have all Dogs</b></p>
                   <a href="signup.php" target="_blank"> <button class="btn btn-danger btn-lg active"><b>Shop Now</b> </button></a>
                   </div>
                </center>
            </div>
       </div><br><br>
        <div class="container">
             <div class="row text-center">               
                 <div class="col-md-4 col-sm-7"> 
                     <div class="thumbnail">

                <image src="img\dog4.jpg"/>
             <div class="caption">
                 <h2>german shepherd</h2>
                 <p>The German Shepherd is a German breed of working dog of medium to large size.</p>
             </div>
        </div>
</div>

        <div class="col-md-4 col-sm-7"> 
                     <div class="thumbnail">
          
             <image src="img/dog5.jpg"/>
             <div class="caption">
                 <h2>labrador</h2>
                 <p>The Labrador Retriever or simply Labrador is a British breed of retriever gun dog.</p>
             </div>
           
                     </div>
        </div>

        <div class="col-md-4 col-sm-7"> 
                     <div class="thumbnail">
            
             <image src="img/dog6.jpg"/>
             <div class="caption">
                 <h2>Pitbull</h2>
                 <p>A pit bull is a fighting dog </p>
             </div>
            
                     </div>
        </div>
 
             </div>
         </div><br><br><br><br>
         
      
                
        
       <footer class="fo">
           <div class="container">
            
               <center>
                   <p><small>&copy;</small>Petshop</p>
                   <div style="text-align:left; color:white; font-size:20px;">Contact with Us</div>
                <div style="text-align:left; position:relative; left:0px;">
                Facebook<br>
                Instagram<br>
                Twitter<br>
                +91 1234567890<br>
                xyz<small>&copy;</small>gmail.com
                </div>

                <div style="text-align:center; color:white; font-size:20px; position:relative; top:-130px;">Make Money With Us</div>
                <div style="position:relative; top: -130px;">
                Sell your pets with us<br>
                 <br>
                
                </div>
               </center>
           </div>
           
           
       </footer>
        
        
    </body>
</html>
