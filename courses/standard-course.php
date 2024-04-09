<?php include '../backend/cms/cms-includes/config.php' ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="standard-course.css" />
     <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/84b568a5cc.js" crossorigin="anonymous"></script>
    <script src="../shopping-cart.js"></script>
    <!-- Header Ends Here -->
    <?php 
        if(isset($_GET['course_id'])){
            $courseid = $_GET['course_id'];
            $getcoursedata = getSpecificCourseData($courseid);
            $getcreatordata = intUpdateMember($getcoursedata[9]); ?>

    <title><?php echo $getcoursedata[1] ?></title>
  </head>
  <body>
    <div class="bg"></div>
    <div class="container content-sub-contain">
      <div class="left-detail-box">
        <h1><?php echo $getcoursedata[1] ?></h1>
        <p><?php echo $getcoursedata[2] ?></p>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="far fa-star checked"></span>
        <div class="other-course-details-banner">Created by <a href=""> <?php echo $getcreatordata[1] ?></a></div>

        <!-- Main text white area -->

        <div class="main-desc-course">
          <div class="what-you-learn">
            <h3>What you'll learn</h3>
            <div style="width: 45%; float: left">
                <?php echo $getcoursedata[3] ?>
            </div>
            <div style="width: 45%; float: left; margin-left: 7%">
                <?php echo $getcoursedata[4] ?>
            </div>
          </div>
          <div class="clearfix"></div>
          <div class="description">
            <h4>Description</h4>
            <?php echo $getcoursedata[5] ?>
          </div>
        </div>
      </div>
      <div class="price-box">
          <?php
            $actualprice = $getcoursedata[7];
            $discountedprice = round($actualprice - ((90*$actualprice)/100))
          ?>
        <img src="../Course Images/<?php echo $getcoursedata[8] ?>" alt="" srcset="" />
        <div class="price-box-details">
          <div class="row price-row">
            <div class="col-sm-4">
              <h2><i class="fas fa-rupee-sign"></i> <?php echo $discountedprice ?></h2>
            </div>
            <div class="col-sm-3">
              <h6>
                <del><i class="fas fa-rupee-sign"></i> <?php echo $getcoursedata[7] ?></del>
              </h6>
            </div>
            <div class="col"><h5>90% OFF</h5></div>
          </div>
          <!--<button class="btn btn-info" onclick="updateProductsInCart(<?php echo $courseid ?>)">Add to Cart</button>-->
          <a href="../courses.php" style="text-decoration: none; color: white;"><button class="btn btn-primary">Buy Now</button></a>
          <div style="text-align: center; margin-bottom: 30px">
            <span style="font-size: 10px">30-Day Money-Back Guarantee</span>
          </div>
          <ul class="price-box-ul">
            <h3>This course includes:</h3>
            <li><i class="fas fa-tv"></i> 24 hours on-demand video</li>
            <li><i class="fas fa-file"></i> 1 article</li>
            <li><i class="fas fa-download"></i> 1 downloadable resource</li>
            <li><i class="fas fa-infinity"></i> Full lifetime access</li>
            <li><i class="fas fa-mobile"></i> Access on mobile and TV</li>
            <li><i class="fas fa-trophy"></i> Certificate of completion</li>
          </ul>
        </div>
      </div>
    </div>
  </body>
  <?php } ?>
</html>

<!-- https://www.udemy.com/course/c-programming-for-beginners-/ -->
<!-- &#x2713; -->
