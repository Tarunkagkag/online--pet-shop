<?php
  require("includes/common.php");
?>

<!DOCTYPE html>
<html>
    <head>
       
     
                <meta charset="UTF-8">
        <title>Pet Shop || Cart</title>
         <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script type="text/javascript" src="bootstrap/js/jquery-3.5.0.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
         <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <link rel="stylesheet" href="css/style.css"/>
          <style>
            .abc{
                border:2px solid black;
            }   
           
            </style>
        

    </head>
    <body style="padding-top: 50px;">
    <!-- <div class="col-md-4">
    <div class="input-group mb-3" style="width:130px">
    <div class="abc">
  <button class="input-group-text decrement-btn">-</button>
  <input type="text" class="form-control text-center input-qty bg-white" disabled value="1">
  <button class="input-group-text incremenet-btn">+</button>
</div>
</div>
</div> -->

        
        <?php
        include 'includes/header.php';
        ?>
        
        <br><br><br>
        <div class="container">
               <div class="row row_style2">
                <div class="col-sm-10 col-sm-offset-1">
                    <table class="table table-striped">

                       
                        <?php
                        $sum = 0;
                        $summ=0;
                        $user_id = $_SESSION['user_id'];
                        $query = "SELECT items.price AS Price, items.id,items.Quantity As Quantity,items.name AS Name FROM users_items JOIN items ON users_items.item_id = items.id WHERE users_items.user_id='$user_id' and status='Added to cart'";
                        $result = mysqli_query($con, $query)or die($mysqli_error($con));
                        if (mysqli_num_rows($result) >= 1) {
                            ?>
                            <thead>
                                <tr>
                                    <th>Item Number</th>
                                    <th>Item Name</th>
                                    <th>Price</th>
                                    <th>Quantitiy</th>
                                    <th>Total Price</th>
                                    <th></th>
                                    
                                </tr>
                              
                            </thead>
                            
                            
                            <tbody>
                                <?php
                                while ($row = mysqli_fetch_array($result)) {
                                    $sum+= $row["Price"];
                                    $id="";
                                    $id .= $row["id"] . ",";
                                    echo "<tr>
                                              <td>" . "#" . $row["id"] . "</td>
                                              <td>" . $row["Name"] . "</td>
                                              <td>" . $row["Price"] . "<input type='hidden' class='iprice' value='$row[Price]'</td>
                                              <td><input type='number' id='num' class= 'iquantity'onchange='subTotal()' min='1' max='10' value='$row[Quantity]'></td>
                                              <td class='itotal'></td>
                                              <td><a href='cart-remove.php?id={$row['id']}' class='remove_item_link'> Remove </a></td>
                                          </tr>";
                                }

                                
                                $id = rtrim($id, ",");
                                echo "<tr>
                                          <td></td>
                                          <td>Total</td>
                                          <td>Rs " . $sum . "</td>
                                          <td></td>
                                          <td><h5 id='gtotal'></h5></td>
                                          <td><a href='indx.php'>Confirm Order</a></td>
                                          </tr>";
                                ?>

                                
                                
                            </tbody>
                            
                            <?php
                        } else {
                            echo "<center><h2><br>Add items to the cart first!</h2><p><a href='products.php'>click here</a> to explore products</p></center>";
                        }
                        ?>
                        <?php
                        ?>
                    </table>
                    
                </div>
             </div>
        </div>
        <script>
            var gt=0;
            var iprice=document.getElementsByClassName('iprice');
            var iquantity=document.getElementsByClassName('iquantity');
            var itotal=document.getElementsByClassName('itotal');
            var gtotal=document.getElementById('gtotal');


            function subTotal()
            {
                gt=0;
              for(i=0;i<iprice.length;i++)
              {
               itotal[i].innerText=(iprice[i].value*iquantity[i].value);

               gt=gt+(iprice[i].value*iquantity[i].value);
              }
                gtotal.innerText=gt;
            }
            subTotal();
        </script>
        
        <?php
        include 'includes/footer.php';
        ?>
    </body>
</html>