<?php

    // if(isset($_SESSION['userId'])){
    
    include '../cms/cms-includes/config.php';

    $arrlist = $_POST['arrcout'];
    $lenght = strlen($arrlist);
    $count = 0;
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Checkout</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="../../style.css" />
  </head>
  <body>
    <div class="container">
      <div class="row mt-5">
        <div class="col-md-8 product-container">
            <?php for($i=0; $i<$lenght; $i+=2){
                $gcd = getSpecificCourseData($arrlist[$i]); ?>
            <div class="product">
                <div class="row">
                    <div class="col-md-10"><h4><?php echo $gcd[1] ?></h4></div>
                    <div class="col-md-2 product-price">Rs. <?php echo $gcd[7] ?></div>
                </div>
                <h6><?php echo $gcd[2] ?></h6>
            </div>
            <?php 
            $count += $gcd[7];
        } ?>
        </div>
        <div class="col-md-1"></div>
        <div class="col-md-3 bill-amt">
            <form action="purchase.php" method="POST">
                <h5>Amount: Rs. <?php echo $count ?></h5>
                <p>Applied 90% discount</p>
                <h5>Final Amount: Rs. <?php echo round($count - ((90*$count)/100)) ?></h5>
                <hr class="mt-5" />
                <span>No Coupons Available</span>
                <input type="hidden" name="arrc" value="<?php echo $arrlist ?>">
                <button type="submit" name="finalCheckout" class="btn btn-success">Checkout</button>
            </form>
        </div>
      </div>
    </div>
  </body>
</html>
<?php 
// } else{
//     header("Location: ../../test.html?err=notLoggedIn");
//     exit();
// }
?>