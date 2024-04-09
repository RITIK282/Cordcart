<?php include 'backend/cms/cms-includes/config.php' ?>

<!DOCTYPE html>
<html lang="sv">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="shortcut icon" type="img/png" href="images\faviconig.png" >
        <link rel="stylesheet" href="index.css">
       
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
            integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA=="
            crossorigin="anonymous"
        />
        <script src="JS/jquery-3.5.1.min.js"></script>
        <script src="JS/multislider.min.js"></script>
    </head>

    <body>
        <!--Navbar-->
        <nav class="header">
            <!--Navbar has two part the top one and the bottom one-->
            <!--Here is top one and in this part I put logo, my account part, and the shopping cart-->
            <div class="navbar-top">
                <div>
                   <i class=""id="menuButton"></i>
                    <!--Logo-->
                   
                </div>
                <div>    
                    <div class="logo">
                  <a href="index.html"> <img style=" align-items:left;" src="images\cklogo.png" alt=""></a> 
    
              </div>
             
                        <!--When we click the btnShowAccountInfo this section will be displayed-->
                    </div>
                    <!--Shopping cart-->
                    <div class="shopping-cart">
                        <div class="sum-prices">

                            <nav>
                                <ul>
                                    <li class="active"><a href="https://codekart-project.000webhostapp.com/index.php">Home</a></li>
                                    <li><a href="https://codekart-project.000webhostapp.com/courses.php">Courses</a></li>
                                  
                                    <li><a href="https://codekart-project.000webhostapp.com/login.php">Login</a></li>
                                  
                                </ul>
                            </nav>

                            
                            <!--Shopping cart logo-->
                            <i style="color: red;"
                                class="fas fa-shopping-cart shoppingCartButton"
                            ></i>
                            <!--The total prices of products in the shopping cart -->
                            <h6 id="sum-prices"></h6>
                        </div>
                    </div>
                </div>
            </div>
          
            <div class="producstOnCart hide">
                <div class="overlay"></div>
                <div class="top">
                    <button id="closeButton">
                        <i style="float: right;" class="fas fa-times-circle"></i>
                    </button>
                    <h3>Cart</h3>
                </div>
                <ul id="buyItems">
                    <h4 class="empty">Your shopping cart is empty</h4>
                   
                </ul>
                <form action="backend/payment/checkout.php" method="post">
                    <input type="hidden" id="arrcont" name="arrcout">
                    <button type="submit" class="btn checkout hidden">Check out</button>
                </form>
              
            </div>
            
        </nav>
