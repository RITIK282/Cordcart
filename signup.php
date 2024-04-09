<?php include 'header.php' ?>
<title>Signup</title>
    <section class="signupform">
    <div class="bglogin">

    </div>
    <div class="signup">
   

<h1>Sign up here</h1>    
<form action="backend/includes/signup.inc.php" method="POST">
    <input type="text" class="input-box" placeholder="Name" name="cust_name" required>
    <input type="number" class="input-box" placeholder="Contact No." name="cust_phone" >
    <input type="email" class="input-box" placeholder="Your Email" name="cust_email" required>
    <input type="Password" class="input-box" placeholder="Password" name="cust_pass" required>
    <p style="margin-top: 15px;"><span><input type="checkbox"></span> Agree to the term and services</p>
    <button type="button" style="margin-top: 30px;" class="sign-btn" name="usrSignUp">Sign up </button>
    <hr>
    <p>Do you have an account ? <a href="login.php"> Login</a></p>
</form>
</div>
</section>

<?php include 'footer.php' ?>