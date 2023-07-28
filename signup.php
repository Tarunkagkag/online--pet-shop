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
        <style>
    .img{
       
        
        height: 100%;
        width: 100%;
        position: absolute;
        top: 60px;
        left: 0;
       
    
    }
    </style>

        
                <meta charset="UTF-8">
        <title>Fruit Store | Signup </title>
         <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script type="text/javascript" src="bootstrap/js/jquery-3.5.0.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
         <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <link rel="stylesheet" href="css/style.css"/>
    </head>
    <body>
        <?php 
			include 'includes/header.php'; 
		?>
        <div class="img">
        <img src="img/61hMOnZwJFS._AC_UL600_SR600,600_.jpg">
        </div>
        <br><br><br><br><br><br>
        <div class="container">
            <div class="row row_style1">
		
				<div class=" col-md-4 col-md-offset-4">
				<div class="row">
                <div class="col-xs-12 col-xs-offset-1">
                
                    <h1 style="color:red;"><center> SIGN UP </center></h1>
                    
                    <form action="signup_script.php" method="POST">
                        <div class="form-group">
                            <input type="text"  class="form-control" placeholder="Name" name="name"  required>
                        </div>
                        <div class="form-group">
                            <input type="email"  class="form-control" placeholder="Email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required>
							<?php
                                if(isset($_GET["m1"])){
                                  echo $_GET['m1'];
                                }
                            ?>
                        </div>
                        <div class="form-group">
                            <input type="password"  class="form-control" placeholder="Password" name="password" pattern=".{6,}" required>
                        </div>
                        <div class="form-group">
                            <input type="tel"  class="form-control" placeholder="Contact" name="contact" maxlength="10" size="10" minlenght="10" required>
							<?php
                                if(isset($_GET["m2"])){
                                  echo $_GET['m2'];
                                }
                            ?>
                        </div>
                        <div class="form-group">
                            <input type="text"  class="form-control" placeholder="City" name="city">
                        </div>
                        <div class="form-group">
                            <input type="text"  class="form-control" placeholder="Address" name="address">
                        </div>
                        <center><button class="btn btn-primary">Submit</button></center>
                    </form>
                </div></div></div>
            </div>
        </div>
        
        
       <?php
        include 'includes/footer.php';
        ?>  
    </body>
</html>
