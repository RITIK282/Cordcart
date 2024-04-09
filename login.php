<?php include 'header.php' ?>

<title>Login</title>

    <section class="signupform">
    <div class="bglogin">

    </div>
    <div class="signup">
   

<h1>Login here</h1>    
<form action="backend/includes/login.inc.php" method="POST">
    
    <input type="email" name="cust_email" class="input-box" placeholder="Your Email" required>
    <input type="Password" name="cust_pass" class="input-box" placeholder="Password" required>
 
    <button type="submit" style="margin-top: 60px;" class="sign-btn" name="usrLogin">Login</button>
    <hr>
    <p>Do not have an account?</p>
     <p><a href="https://codekart-project.000webhostapp.com/signup.php">Create an account</a></p>
</form>
</div>
</section>


<?php include 'footer.php' ?>