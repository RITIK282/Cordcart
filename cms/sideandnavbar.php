<?php include '../backend/cms/cms-includes/config.php' ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/84b568a5cc.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="cms-style.css" />
  </head>
  <body>
    <div class="sidenav bg-dark">
      <div class="cms-usr-img">
        <img src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460__480.png" alt="" />
      </div>
      <?php if($_SESSION['userRole'] == 'tmember' || $_SESSION['userRole'] == 'tparty'){?>
        <a href="addCourse.php">Add Courses</a>
        <a href="manage-courses-team.php">Manage Courses</a>
        <?php if($_SESSION['userRole'] == 'tmember'){ ?>
          <a href="add-teammember.php">Add / Manage Team</a>
        <?php }}else{ ?>
          <a href="mycourses.php">My Courses</a>
        <?php } ?>
      <!-- <a href="#contact">Manage Payments</a> -->
    </div>

    <!-- Top Nav -->

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark py-3">
      <div style="margin-left: 95%; color: white">
        <a href="../backend/logout.php" style="color: white"><i class="fas fa-sign-out-alt"></i></a>
      </div>
    </nav>

    <!-- Main Body CMS -->
