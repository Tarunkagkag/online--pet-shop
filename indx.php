<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="style.css">
   

</head>

<body>

    <div class="container">

        <form action="connect.php" method="POST">

            <div class="row">

                <div class="col">

                    <h3 class="title">enter coorect referal number for the payment verification</h3>

                    <div class="inputBox">
                        <span>full name :</span>
                        <input type="text" placeholder="Tarun Kag" name="fullName" required>
                    </div>
                    <div class="inputBox">
                        <span>email :</span>
                        <input type="email" placeholder="example@example.com" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"  required>
                    </div>
                    
                    <div class="inputBox">
                            <span>Referal Number:</span>
                            <input type="number" placeholder="897654345623" name="cvv"  maxlength="12" size="12" minlenght="12" required>
                      
                        </div>

                    <div class="flex">
                       
                       
                    </div>

                </div>

                <div class="col">

                    <h3 class="title">Scan qr code for the payment</h3><br><br><br>
                    
                        <img src="img/payment.jpg" alt="Scanner" height=300px; width=350px; >
                   


                </div>

            </div>

            <input type="submit" value="proceed to checkout" class="submit-btn">

        </form>

    </div>

</body>

</html>